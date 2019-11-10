@extends('layouts.suadmin')
@section('content')



<!-- DataTales Example -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <a target="_blank"></a>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header-index" style="display: flex; justify-content: space-between; align-items: center;">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Sarana</h6>
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
              <th>Id</th>
              <th>Sekbid</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($sekbid as $j)
            <tr>
              <td>{{$j->id}}</td>
              <td>{{$j->nama}}</td>
              <td>{!!$j->deskripsi!!}</td>
              <td>
                <a data-toggle="modal" data-target="#EditMapel{{$j->id}}" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="/sekbid/delete/{{$j->id}}" class="btn btn-outline-danger">
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
<!-- /.container-fluid -->

<!-- add Jurusan -->

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekbid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/sekbid/add" method="POST" enctype="multipart/form-data">
        	@csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sekbid</label>
            <input type="text" class="form-control" name="nama" id="recipient-name">
          </div>
          <div class="form-group">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="deskripsi"></textarea>
                        </div>
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
<!-- End add Jurusan -->


<!-- Edit jurusan -->
@foreach($sekbid as $j)
	<div class="modal fade" id="EditMapel{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Udate Data Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/sekbid/update" method="POST" enctype="multipart/form-data">
        	@csrf
        	<input type="hidden" name="id" value="{{$j->id}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama" id="recipient-name" value="{{$j->napel}}">
          </div>
          <div class="form-group">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="deskripsi">{!!$j->deskripsi!!}</textarea>
                        </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
        </form>
      </div>
  </div>
</div>
</div>
@endforeach

<!-- End Edit Jurusan -->
@endsection