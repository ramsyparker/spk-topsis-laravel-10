<table id="example" class="table table-striped mt-3 table-hover" style="width: 100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Kode</th>
      <th>Nama</th>
      <th>Bobot</th>
      <th>Jenis</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody id="tableBody">
    @foreach ($criteria as $criterion)
    <tr>
      <td>{{$criterion->id}}</td>
      <td>C{{$loop->iteration}}</td>
      <td>{{$criterion->name}}</td>
      <td>{{$criterion->weight}}</td>
      <td>{{$criterion->benefited == 1 ? 'Benefit' : 'Cost'}}</td>
      <td class="">
        <div class="btn-wrapper d-flex gap-2 flex-wrap">
          <a href="#" data-id="{{$criterion->id}}" data-name="{{$criterion->name}}" data-weight="{{$criterion->weight}}"
            data-benefited="{{$criterion->benefited}}" class="btn edit btn-action btn-warning text-white"><i
              class="bx bx-edit"></i></a>
          <a href="#" class="delete btn btn-action btn-danger text-white" data-name="{{$criterion->name}}"
            data-id="{{$criterion->id}}">
            <i class="bx bx-trash"></i>
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
      <th>Bobot</th>
      <th>Jenis</th>
      <th>Aksi</th>
    </tr>
  </tfoot>
</table>