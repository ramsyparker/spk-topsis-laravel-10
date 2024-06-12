@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-calculator-line fs-2"></i>
  <p class="fs-3 m-0">Data Hasil Akhir</p>
</div>
<div class="breadcrumbs-box mt-2 rounded rounded-2 bg-white p-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Hasil Akhir</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white d-flex flex-column gap-4">
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Keputusan
    </div>
    <div class="card-body content p-1">
      <table id="rankTable" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Nilai</th>
            <th>Ranking</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sortedResults as $sortedResult)
          <tr>
            <td>{{$sortedResult->code}}</td>
            <td>{{$sortedResult->name}}</td>
            <td>{{$sortedResult->grade}}</td>
            <td>{{$sortedResult->rank}}</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <thead>
            <tr>
              <th>Kode Alternatif</th>
              <th>Nama Alternatif</th>
              <th>Nilai</th>
              <th>Ranking</th>
            </tr>
          </thead>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection