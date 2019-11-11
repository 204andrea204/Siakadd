@extends('layouts.suadmin')
@section('content')

<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <a target="_blank"></a>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header-index" style="display: flex; justify-content: space-between; align-items: center;">
      <h6 class="m-0 font-weight-bold text-primary">Galeri</h6>
        <a href="#modaladd" data-toggle="modal">
      <button h class="btn btn-outline-primary">
          <i class="fas fa-plus"></i>
      </button>
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

          	@foreach($images as $j)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src="{{ storage_path('images/'.$j->images) }}" class="img-mini"></td>
              <td>
                <a href="/galeri/delete/{{$j->id}}" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('galeri/save')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Masukan Foto</label>
            <input class="form-control" type="file" multiple="true" id="inputCity" name="image[]">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>

@endsection