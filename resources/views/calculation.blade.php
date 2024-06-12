@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-calculator-line fs-2"></i>
  <p class="fs-3 m-0">Data Perhitungan</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Perhitungan</li>
    </ol>
  </nav>
</div>
<div class="content-box px-3 pt-3 pb-5 mt-3 rounded rounded-2 bg-white d-flex flex-column gap-4">
  <div class="card" id="Matriks Keputusan">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Keputusan
    </div>
    <div class="card-body p-1">
      <table id="decisionMatrix" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            @foreach ($decisionMatrix[0] as $value)
            <th>C{{$loop->iteration}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($decisionMatrix as $values)
          <tr>
            @foreach ($values as $value)
            @if ($loop->first)
            <td>A{{$loop->parent->iteration}}</td>
            @endif
            <td>{{$value}}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Ternormalisasi
    </div>
    <div class="card-body p-1">
      <table id="normMatrix" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            @foreach ($normMatrix[0] as $value)
            <th>C{{$loop->iteration}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($normMatrix as $values)
          <tr>
            @foreach ($values as $value)
            @if ($loop->first)
            <td>A{{$loop->parent->iteration}}</td>
            @endif
            <td>{{$value}}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Matriks Ternormalisasi Terbobot
    </div>
    <div class="card-body p-1">
      <table id="weightedNorm" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            @foreach ($weightedNorm[0] as $value)
            <th>C{{$loop->iteration}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($weightedNorm as $values)
          <tr>
            @foreach ($values as $value)
            @if ($loop->first)
            <td>A{{$loop->parent->iteration}}</td>
            @endif
            <td>{{$value}}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Solusi Ideal Positif (A+)
    </div>
    <div class="card-body p-1">
      <table id="idealPositive" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Solusi Ideal Positif (A+)</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($idealPositive); $i++) <tr>
            <td>C{{$i+1}}</td>
            <td>{{$criteria[$i]->name}}</td>
            <td>{{$idealPositive[$i]}}</td>
            </tr>
            @endfor
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Solusi Ideal Negatif (A-)
    </div>
    <div class="card-body p-1">
      <table id="idealNegative" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Solusi Ideal Negatif (A-)</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($idealNegative); $i++) <tr>
            <td>C{{$i+1}}</td>
            <td>{{$criteria[$i]->name}}</td>
            <td>{{$idealNegative[$i]}}</td>
            </tr>
            @endfor
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Jarak Ideal Positif (D+)
    </div>
    <div class="card-body p-1">
      <table id="solutionPositive" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Jarak Ideal Positif (D+)</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($solutionPositive); $i++) <tr>
            <td>A{{$i+1}}</td>
            <td>{{$alternatives[$i]->name}}</td>
            <td>{{$solutionPositive[$i]}}</td>
            </tr>
            @endfor
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Jarak Ideal Negatif (D-)
    </div>
    <div class="card-body p-1">
      <table id="solutionNegative" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Jarak Ideal Negatif (D-)</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($solutionNegative); $i++) <tr>
            <td>A{{$i+1}}</td>
            <td>{{$alternatives[$i]->name}}</td>
            <td>{{$solutionNegative[$i]}}</td>
            </tr>
            @endfor
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header d-flex gap-1">
      <i class="ri-table-2"></i>Kedekatan Relatif Terhadap Solusi Ideal (V)
    </div>
    <div class="card-body p-1">
      <table id="PreferenceValue" class="table table-striped table-hover " style="width: 100%">
        <thead>
          <tr>
            <th>Kode Alternatif</th>
            <th>Nama Alternatif</th>
            <th>Kedekatan Relatif Terhadap Solusi Ideal (V))</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($PreferenceValue); $i++) <tr>
            <td>A{{$i+1}}</td>
            <td>{{$alternatives[$i]->name}}</td>
            <td>{{$PreferenceValue[$i]}}</td>
            </tr>
            @endfor
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function () {
  $('#decisionMatrix').DataTable();
  $('#normMatrix').DataTable();
  $('#weightedNorm').DataTable();
  $('#idealPositive').DataTable();
  $('#idealNegative').DataTable();
  $('#solutionPositive').DataTable();
  $('#solutionNegative').DataTable();
  $('#PreferenceValue').DataTable();
  });
</script>
@endpush