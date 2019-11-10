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
        <a href="/guru/tambah">
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
              <th>Nama</th>
              <th>NIP</th>
              <th>Lulusan</th>
              <th>Mata Pelajaran</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($gurus as $s)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>

                <div class="btn-group dropright">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu">
                  <p>Tempat Lahir &emsp;&emsp;&nbsp;: {{ $s->tempat_lahir }}</p>
                  <p>Tanggal Lahir &emsp;&emsp;: {{ $s->tggl_lahir }}</p>
                  <p>Jenis Kelamin &emsp;&emsp;: {{ $s->jenis_kelamin }}</p>
                </div>
              </div>

                @if(!empty($s->foto))
                <img src="{{ asset('foto/guru/'.$s->foto) }}" class="img-mini">
                @else
                <img src="{{ asset('foto/default-foto.jpg') }}" class="img-mini">
                @endif
                &nbsp;
                {{ $s->nama }}
              </td>
              <td>{{ $s->nip }}</td>
              <td>{{ $s->lulusan }}</td>
              <td>{{ $s->mapel->napel }}</td>
              <td>{{ $s->keterangan }}</td>
              <td>
                <a href="/guru/edit/{{$s->id}}" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="/guru/delete/{{$s->id}}" class="btn btn-outline-danger">
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