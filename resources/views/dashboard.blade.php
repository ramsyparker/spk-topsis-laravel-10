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
        <h4>Jumlah Data Kriteria :</h4>
        <p class="fs-4">{{ $criteriaCount }}</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="data-count-item p-3 bg-white rounded rounded-2 border">
        <h4>Jumlah Data Alternatif :</h4>
        <p class="fs-4">{{ $alternativesCount }}</p>
      </div>
    </div>
  </div>
</div>
@endsection