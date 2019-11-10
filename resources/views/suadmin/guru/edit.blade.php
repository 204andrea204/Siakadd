@extends('layouts.suadmin')
@section('content')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color: white; font-family:Monaco;">Tambah Data Siswa</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/guru/update" enctype="multipart/form-data">
                  	@csrf
                    <input type="hidden" name="id" value="{{$gurus->id}}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama" name="nama" type="text" class="form-control" value="{{$gurus->nama}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="NIP" name="nip" type="number" class="form-control" value="{{$gurus->nip}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8">
                    		<div class="form-group bmd-form-group">

			            			<select class="form-control" name="mapel_id">
				                		<option selected>Pilih Mapel......</option>
				              			@foreach($mapels as $j)
                              @if($j->id == $gurus->mapel_id)
				                		<option value="{{$j->id}}" selected>{{$j->napel}}</option>
                            @else
                            <option value="{{$j->id}}">{{$j->napel}}</option>
                            @endif
				              			@endforeach
			            			</select>

			        		</div>
			        	</div>

			        <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Lulusan" name="lulusan" type="text" class="form-control" value="{{$gurus->lulusan}}">
                        </div>
                      </div>
			        </div>
			        <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tempat_lahir" name="tempat_lahir" type="text" class="form-control" value="{{$gurus->tempat_lahir}}">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tggl_lahir" name="tggl_lahir" type="date" class="form-control" value="{{$gurus->tggl_lahir}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                    	<div class="form-group1 bmd-form-group">
                    		<p>Jenis Kelamin :</p>
                    		  <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="radio1" {{ ($gurus->jenis_kelamin=="Laki-Laki")?"checked ": ""}}
                          <label  for="radio1">Laki-Laki</label>

							             <input type="radio" name="jenis_kelamin" value="Perempuan" id="radio2"{{ ($gurus->jenis_kelamin=="Perempuan")?"checked ": ""}}>
                           <label for="radio2">Perempuan</label>
                    	</div>
                    	</div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Keterangan" name="Keterangan" type="text" class="form-control" value="{{$gurus->Keterangan}}">
                        </div>
                      </div>
                    </div>
                    <input class="form-control" type="file" name="foto" value="{{$gurus->foto}}" onchange="readURL1(this);">
                <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('foto/guru/'. $gurus->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
                    </div>
                </center>

                    <button type="submit" class="btn btn-primary pull-right">Update Data</button>
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