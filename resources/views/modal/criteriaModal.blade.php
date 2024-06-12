{{-- Create Modal --}}
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Tambah Kriteria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('criteria.store')}}" id="addForm" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="nama" class="mb-1">Nama Kriteria</label>
            <input required class="form-control" type="text" name="name" id="name"
              placeholder="Masukkan Nama Kriteria" />
          </div>
          <div class="form-group mb-3">
            <label for="berat" class="mb-1">Bobot Kriteria</label>
            <input required class="form-control" type="number" name="weight" id="weight"
              placeholder="Masukkan Bobot Kriteria" />
          </div>
          <div class="form-group mb-3">
            <label for="Status" class="mb-1">Jenis Kriteria</label>
            <select required id="benefited" name="benefited" class="form-select status"
              aria-label="Default select example">
              <option class="text-secondary" value="">
                Klik untuk memilih jenis kriteria
              </option>
              <option value=0 class="text-secondary">Cost</option>
              <option value=1 class="text-secondary">Benefit</option>
            </select>
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
  <form action="{{route('criteria.update')}}" id="editForm" method="POST">
    @method('put')
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Edit Kriteria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          <input type="hidden" name="id" id="edit-id">
          <div class="form-group mb-3">
            <label for="nama" class="mb-1">Nama Kriteria</label>
            <input class="form-control" type="text" required name="name" id="name-edit" placeholder="Ram" />
          </div>
          <div class="form-group mb-3">
            <label for="weight" class="mb-1">Bobot Kriteria</label>
            <input class="form-control" type="number" required name="weight" id="weight-edit" placeholder="20" />
          </div>
          <div class="form-group mb-3">
            <label for="Status" class="mb-1">Jenis Kriteria</label>
            <select id="benefited-edit" required name="benefited" class="form-select jenis status "
              aria-label="Default select example">
              <option value=0 class="text-secondary">Cost</option>
              <option value=1 class="text-secondary">Benefit</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning text-white">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>


<!-- Import Criteria Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <form action="{{route('template.criteria.import')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Tambah Kriteria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="template-wrapper p-2 border border-2 rounded-2 text-center">
            <a href="{{route('template.criteria')}}">impor-kriteria.xlsx</a>
          </div>
          <div class="impor-wrapper mt-2 p-2 border border-2 rounded-2 text-center">
            <input type="file" name="criteria">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Hapus Kriteria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="text-center">Apakah anda yakin mengapus kriteria <span class="criteria-name"></span>?</h4>
      </div>
      <form action="{{route('criteria.destroy')}}" method="post">
        @method('delete')
        @csrf
        <input type="hidden" name="id" id="delete-id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" id="deletecriteria" class="btn btn-danger">Hapus</button>
      </form>
    </div>
  </div>
</div>