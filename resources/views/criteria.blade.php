@extends('layouts.base')

@section('content')
<div class="title-box  d-flex gap-2 align-items-baseline"><i class="ri-database-2-line fs-2"></i>
  <p class="fs-3 m-0">Data Kriteria</p>
</div>
<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-apps-line"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <div class="btn-wrapper mt-2">

      {{-- Error Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="btn btn-success" id="add" data-bs-toggle="modal" data-bs-target="#addnew"><i
          class="ri-add-box-line"></i> Tambah Kriteria
      </div>

      <a href="{{route('criteria.export.excel')}}" class="text-decoration-none">
        <div class="btn btn-primary"><i class="ri-add-box-line"></i> Export Excel
        </div>
      </a>

      <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#importModal"><i class="ri-add-box-line"></i>
        Impor Kriteria
      </div>

    </div>

    <div class="Produk mt-2 mb-2">
      @include('criteria-table', $criteria)
    </div>
  </div>
</div>

@include('modal.criteriaModal')

@endsection

@push('js')
<script type="text/javascript">
  $(document).ready(function(){
      
      // $.ajaxSetup({
      //     headers: {
      //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      // });

       
      $(document).on('click', '.edit', function (event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          var weight = $(this).data('weight');
          var benefited = $(this).data('benefited');
          $('#editmodal').modal('show');
          $('#name-edit').val(name);
          $('#weight-edit').val(weight);
          $('#benefited-edit').val(benefited);
          $('#edit-id').val(id);
      });
       
      $(document).on('click', '.delete', function(event){
          event.preventDefault();
          var id = $(this).data('id');
          var name = $(this).data('name');
          $('#deletemodal').modal('show');
          $('#delete-id').val(id);
          $('.criteria-name').html(name);
      });
       
       
  });

    
</script>
@endpush