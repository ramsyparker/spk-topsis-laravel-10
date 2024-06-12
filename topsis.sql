CREATE TABLE kamera (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_kamera VARCHAR(255),
    ISO INT,
    resolusi_vidio INT,
    resolusi_foto INT,
    titik_fokus INT,
    harga DECIMAL(10, 2)
);

CREATE TABLE bobot (
    id_bobot INT PRIMARY KEY AUTO_INCREMENT,
    bobot1 DECIMAL(3, 2),
    bobot2 DECIMAL(3, 2),
    bobot3 DECIMAL(3, 2),
    bobot4 DECIMAL(3, 2),
    bobot5 DECIMAL(3, 2)
);


CREATE VIEW normalisasi AS
SELECT 
    id,
    nama_kamera,
    ISO / SQRT(SUM(ISO * ISO) OVER ()) AS norm_iso,
    resolusi_vidio / SQRT(SUM(resolusi_vidio * resolusi_vidio) OVER ()) AS norm_resolusi_vidio,
    resolusi_foto / SQRT(SUM(resolusi_foto * resolusi_foto) OVER ()) AS norm_resolusi_foto,
    titik_fokus / SQRT(SUM(titik_fokus * titik_fokus) OVER ()) AS norm_titik_fokus,
    harga / SQRT(SUM(harga * harga) OVER ()) AS norm_harga
FROM kamera;


CREATE VIEW normalisasi_terbobot AS
SELECT
    n.id,
    n.nama_kamera,
    n.norm_iso * b.bobot1 AS bobot_iso,
    n.norm_resolusi_vidio * b.bobot2 AS bobot_resolusi_vidio,
    n.norm_resolusi_foto * b.bobot3 AS bobot_resolusi_foto,
    n.norm_titik_fokus * b.bobot4 AS bobot_titik_fokus,
    n.norm_harga * b.bobot5 AS bobot_harga
FROM normalisasi n
JOIN bobot b ON b.id_bobot = 1; -- Asumsi menggunakan bobot pertama


CREATE VIEW solusi_ideal AS
SELECT 
    MAX(bobot_iso) AS A_plus_iso,
    MIN(bobot_iso) AS A_minus_iso,
    MAX(bobot_resolusi_vidio) AS A_plus_resolusi_vidio,
    MIN(bobot_resolusi_vidio) AS A_minus_resolusi_vidio,
    MAX(bobot_resolusi_foto) AS A_plus_resolusi_foto,
    MIN(bobot_resolusi_foto) AS A_minus_resolusi_foto,
    MAX(bobot_titik_fokus) AS A_plus_titik_fokus,
    MIN(bobot_titik_fokus) AS A_minus_titik_fokus,
    MIN(bobot_harga) AS A_plus_harga,
    MAX(bobot_harga) AS A_minus_harga
FROM normalisasi_terbobot;


CREATE VIEW jarak_solusi AS
SELECT
    nt.id,
    nt.nama_kamera,
    SQRT(POW(nt.bobot_iso - si.A_plus_iso, 2) +
         POW(nt.bobot_resolusi_vidio - si.A_plus_resolusi_vidio, 2) +
         POW(nt.bobot_resolusi_foto - si.A_plus_resolusi_foto, 2) +
         POW(nt.bobot_titik_fokus - si.A_plus_titik_fokus, 2) +
         POW(nt.bobot_harga - si.A_plus_harga, 2)) AS D_plus,
    SQRT(POW(nt.bobot_iso - si.A_minus_iso, 2) +
         POW(nt.bobot_resolusi_vidio - si.A_minus_resolusi_vidio, 2) +
         POW(nt.bobot_resolusi_foto - si.A_minus_resolusi_foto, 2) +
         POW(nt.bobot_titik_fokus - si.A_minus_titik_fokus, 2) +
         POW(nt.bobot_harga - si.A_minus_harga, 2)) AS D_minus
FROM normalisasi_terbobot nt
JOIN solusi_ideal si;


CREATE VIEW preferensi AS
SELECT 
    id,
    nama_kamera,
    D_minus / (D_plus + D_minus) AS nilai_preferensi
FROM jarak_solusi
ORDER BY nilai_preferensi DESC;


SELECT * FROM preferensi;

