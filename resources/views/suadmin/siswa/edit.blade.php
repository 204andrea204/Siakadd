@extends('layouts.suadmin')
@section('content')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color: white; font-family:Monaco;">Edit Data Siswa</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/siswa/update" enctype="multipart/form-data">
                  	@csrf
                    <input type="hidden" name="id" value="{{$siswas->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama" name="nama" type="text" class="form-control" value="{{$siswas->nama}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="NISN" name="nisn" type="number" class="form-control" value="{{$siswas->nisn}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="NIS" name="nis" type="number" class="form-control" value="{{$siswas->nis}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="NO HP" name="nohp" type="number" class="form-control" value="{{$siswas->nohp}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8">
                    		<div class="form-group bmd-form-group">

                          <select class="form-control" name="jurusan_id">
                            <option selected>Pilih Category........</option>
                            @foreach($jurusans as $q)
                              @if($q->id == $siswas->jurusan_id)
                              <option value="{{$q->id}}" selected>{{$q->nama}}</option>
                              @else
                              <option value="{{$q->id}}">{{$q->nama}}</option>
                              @endif
                            @endforeach
                          </select>
                          
			        		</div>
			        	</div>
			        <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Kelas" name="kelas" type="text" class="form-control" value="{{$siswas->kelas}}">
                        </div>
                      </div>
			        </div>
			        <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tempat_lahir" name="tempat_lahir" type="text" class="form-control" value="{{$siswas->tempat_lahir}}">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tggl_lahir" name="tggl_lahir" type="date" class="form-control" value="{{$siswas->tggl_lahir}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                    	<div class="form-group1 bmd-form-group">
                    		<p>Jenis Kelamin :</p>
                    		  <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="radio1" {{ ($siswas->jenis_kelamin=="Laki-Laki")?"checked ": ""}}>
                          <label  for="radio1">Laki-Laki</label>

							             <input type="radio" name="jenis_kelamin" value="Perempuan" id="radio2"{{ ($siswas->jenis_kelamin=="Perempuan")?"checked ": ""}}>
                           <label for="radio2">Perempuan</label>
                    	</div>
                    	</div>
                    </div>
                    <input class="form-control" type="file" name="foto" value="{{$siswas->foto}}" onchange="readURL1(this);">
                <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('foto/siswa/'. $siswas->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
                    </div>
                </center>

                    <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
	</div>
</div>


            <script type="text/javascript">
                         function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>

@endsection