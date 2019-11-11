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
      <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
        <a href="{{url('prestasi/tambah')}}">
          <button class="btn btn-outline-primary">
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
              <th>Nama Prestasi</th>
              <th>Tingkat</th>
              <th>Peraih</th>
              <th>keterangan</th>
              <th>foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $prestasi = \App\Prestasi::all();
            ?>

            @foreach($prestasi as $s)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $s->nama_pres}}</td>
              <td>{{ $s->tingkat}}</td>
              <td>{{ $s->peraih}}</td>
              <td>{!! $s->keterangan !!}</td>
              <td>
                @if(!empty($s->foto))
                <img src="{{ asset('foto/prestasi/'.$s->foto) }}" class="img-mini">
                @else
                <img src="{{ asset('foto/default-foto.jpg') }}" class="img-mini">
                @endif
                &nbsp;
              </td>
              <td>
                <a href="/prestasi/edit/{{$s->id}}" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="/prestasi/delete/{{$s->id}}" class="btn btn-outline-danger">
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

@endsection