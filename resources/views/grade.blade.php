@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-survey-line fs-2"></i>
  <p class="fs-3 m-0">Data Penilaian</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Penilaian</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <div class="Produk mt-2 mb-2">
      <table id="example" class="table table-striped mt-3 table-hover" style="width: 100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alternatives as $alternative)
          <tr>
            <td>{{$alternative->id}}</td>
            <td>A{{$loop->iteration}}</td>
            <td>{{$alternative->name}}</td>
            <td class="">
              <div class="btn-wrapper d-flex gap-2 flex-wrap">
                <a href="#" data-id="{{$alternative->id}}" data-name="{{$alternative->name}}"
                  class="btn edit btn-action btn-warning text-white"><i class="bx bx-edit"></i></a>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@include('modal.gradeModal.gradeModalBase')
@endsection

@push('js')
<script type="text/javascript">
  $(document).on('click', '.edit', function (event){
          var id = $(this).data('id');
          event.preventDefault();
          $('#editmodal').modal('show');
          getGradeForms(id);
      });

  function getGradeForms(id){
    $.get("{{ route('grades.getForms') }}",{id:id}, function(data){
        $('#editmodal').empty().html(data);
    })
  }

</script>
@endpush