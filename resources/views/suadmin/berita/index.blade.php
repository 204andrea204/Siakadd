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
        <a href="/berita/tambah">
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
              <th>?</th>
              <th>Judul</th>
              <th>Pembuat</th>
              <th>Isi Berita</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $berita = \App\Berita::all();
            ?>

            @foreach($berita as $s)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                <div class="btn-group dropright">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu">
                @if(!empty($s->foto))
                <img src="{{ asset('foto/berita/'.$s->foto) }}" class="img-mini">
                @else
                <img src="{{ asset('foto/default-foto.jpg') }}" class="img-mini">
                @endif
                &nbsp;
                 <p>link video : {{ $s->video }}</p>
                 <p>Tanggal Upload : {{ $s->tanggal }}</p>
                </div>
              </div>
              </td>
              <td>

                {{Str::limit($s->judul , 10)}}
              </td>
              <td>{{ $s->pembuat }}</td>
              <td>{!!Str::limit($s->isi , 220)!!}</td>
              <td>
                <a href="/berita/edit/{{$s->id}}" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="/berita/delete/{{$s->id}}" class="btn btn-outline-danger">
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