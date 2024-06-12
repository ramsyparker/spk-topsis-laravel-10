@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-dashboard-line fs-2"></i>
  <p class="fs-3 m-0">Dashboard</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </nav>
</div>

<!-- Menambahkan jumlah data -->
<div class="data-count-box mt-2 mb-3">
  <div class="row">
    <div class="col-md-6">
      <div class="data-count-item p-3 bg-white rounded rounded-2 border">
        <h4>Jumlah Data Kriteria</h4>
        <p class="fs-4">{{ $criteriaCount }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="data-count-item p-3 bg-white rounded rounded-2 border">
        <h4>Jumlah Data Alternatif</h4>
        <p class="fs-4">{{ $alternativesCount }}</p>
      </div>
    </div>
  </div>
</div>

<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <div class="row row-gap-3">
      <a href="{{route('criteria')}}" class="col-sm-6 card-dashboard text-decoration-none">
        <div class="card ">
          <div class="card-body  row justify-content-between align-items-center">
            <div class="card-body-content col-9">
              <h3 class="card-title">Data Kriteria</h3>
              <p class="card-text text-secondary fw-light">Fitur ini digunakan untuk mengolah data kriteria seperti
                menambah, memperbarui, atau menghapus data kriteria.</p>
            </div>
            <div class="col-2 col-sm-3 d-flex justify-content-center img-menu">
              <i class="fs-1 bx bx-data "></i>
            </div>
          </div>
        </div>
      </a>
      <a href="{{route('alternatives')}}" class="col-sm-6 card-dashboard text-decoration-none">
        <div class="card ">
          <div class="card-body  row justify-content-between align-items-center">
            <div class="card-body-content col-9">
              <h3 class="card-title">Data Alternatif</h3>
              <p class="card-text text-secondary fw-light">Fitur ini digunakan untuk mengolah data alternatif seperti
                menambah, memperbarui, atau menghapus data alternatif.</p>
            </div>
            <div class="col-2 col-sm-3 d-flex justify-content-center img-menu"><i class="fs-1 ri-team-line me-2"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="{{route('grades')}}" class="col-sm-6 card-dashboard text-decoration-none">
        <div class="card ">
          <div class="card-body  row justify-content-between align-items-center">
            <div class="card-body-content col-9">
              <h3 class="card-title">Data Penilaian</h3>
              <p class="card-text text-secondary fw-light">Data penilaian yang digunakan untuk mengolah data penilaian
                Metode TOPSIS.</p>
            </div>
            <div class="col-2 col-sm-3 d-flex justify-content-center img-menu"> <i class="fs-1 ri-survey-line"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="#" class="col-sm-6 card-dashboard text-decoration-none">
        <div class="card ">
          <div class="card-body  row justify-content-between align-items-center">
            <div class="card-body-content col-9">
              <h3 class="card-title">Data Perhitungan</h3>
              <p class="card-text text-secondary fw-light">Data hasil perhitungan yang digunakan untuk melihat data
                perhitungan sistem pendukung keputusan Topsis.</p>
            </div>
            <div class="col-2 col-sm-3 d-flex justify-content-center img-menu"><i class="fs-1 ri-calculator-line"></i>
            </div>
          </div>
        </div>
      </a>
      <a href="{{route('results')}}" class="col-sm-6 card-dashboard text-decoration-none">
        <div class="card ">
          <div class="card-body  row justify-content-between align-items-center">
            <div class="card-body-content col-9">
              <h3 class="card-title">Data Hasil Akhir</h3>
              <p class="card-text text-secondary fw-light">Data hasil akhir yang digunakan untuk melihat data hasil
                akhir sistem pendukung keputusan Topsis.</p>
            </div>
            <div class="col-2 col-sm-3 d-flex justify-content-center img-menu"><i class="ri-sort-asc me-2"></i> </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
@endsection