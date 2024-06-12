@if (count($forms) !== 0)
<!-- Edit Modal -->
<form action="{{route('grades.update')}}" id="editForm" method="POST">
  @method('put')
  @csrf
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Penilaian Alternatif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($forms as $form)
        @if ($loop->first)
        <input type="hidden" name="alternative_id" value="{{$form->alternative->id}}" id="edit-id">
        <div class="form-group mb-3">
          <label for="nama" class="mb-1">Nama alternatif</label>
          <input class="form-control" value={{$form->alternative->name}} type="text" name="alternative_name"
          id="name_alternative" disabled />
        </div>
        @endif
        <div class="form-group mb-3">
          <label for="nama" class="mb-1">Nilai kriteria {{$form->criteria->name}}</label>
          <input class="form-control" type="number" name="{{$form->id}}" value={{$form->grade}} @required(true)/>
        </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-warning text-white">Update</button>
      </div>
    </div>
  </div>
</form>
@else
<!-- Info Modal -->
<div class="modal-dialog ">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel">Informasi</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <p class="text">Kriteria Tidak Ditemukan</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
    </div>
  </div>
</div>
@endif