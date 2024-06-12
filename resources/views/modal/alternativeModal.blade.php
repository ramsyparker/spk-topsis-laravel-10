{{-- Create Modal --}}
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Tambah Alternatif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('alternative.store')}}" id="addForm" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="nama" class="mb-1">Nama Alternatif</label>
            <input required class="form-control" type="text" name="name" id="name"
              placeholder="Masukkan Nama Alternatif" />
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="{{route('alternative.update')}}" id="editForm" method="POST">
    @method('put')
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Edit Alternatif</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          <input type="hidden" name="id" id="edit-id">
          <div class="form-group mb-3">
            <label for="nama" class="mb-1">Nama Alternatif</label>
            <input class="form-control" type="text" name="name" id="name-edit" placeholder="Toshiba" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-warning text-white">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Hapus Alternatif</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="text-center">Apakah anda yakin mengapus alternatif <span class="alternative-name"></span>?</h4>
      </div>
      <form action="{{route('alternative.destroy')}}" method="post">
        @method('delete')
        @csrf
        <input type="hidden" name="id" id="delete-id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" id="deletealternative" class="btn btn-danger">Hapus</button>
      </form>
    </div>
  </div>
</div>
</div>