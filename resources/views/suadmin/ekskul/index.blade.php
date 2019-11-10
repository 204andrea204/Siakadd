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
      <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
        <a href="/ekskul/tambah">
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
              <th>Nama Ekskul</th>
              <th>Visi Misi</th>
              <th>Jadwal</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ekskuls as $s)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>

                <div class="btn-group dropright">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu">
                  <p>Nama Pelatih &emsp;&emsp;&nbsp;: {{$s->nama_pelatih}}</p>
                  <p>Sekbid &emsp;&emsp;&nbsp;: {{$s->sekbid->nama}}</p>
                  <p>Keterangan &emsp;&emsp;&nbsp;: {!! $s->keterangan !!}</p>
                </div>
                {{ $s->nama_eks }}
              </td>
              <td>{!! $s->visimisi !!}</td>
              <td>{{ $s->jadwal }}</td>
              <td>@if(!empty($s->foto))
                <img src="{{ asset('foto/ekskul/'.$s->foto) }}" class="img-mini">
                @else
                <img src="{{ asset('foto/default-foto.jpg') }}" class="img-mini">
                @endif
              </td>
              <td>
                <a href="/ekskul/edit/{{$s->id}}" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="/ekskul/delete/{{$s->id}}" class="btn btn-outline-danger">
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