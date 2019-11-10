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
                  <form method="POST" action="/guru/add" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama" name="nama" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="NIP" name="nip" type="number" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8">
                    		<div class="form-group bmd-form-group">
			            			<select class="form-control" name="mapel_id">
				                		<option value="">Pilih Mapel</option>
				              			@foreach($mapels as $j)
				                		<option value="{{$j->id}}">{{$j->napel}}</option>
				              			@endforeach
			            			</select>
			        		</div>
			        	</div>

			        <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Lulusan" name="lulusan" type="text" class="form-control">
                        </div>
                      </div>
			        </div>
			        <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tempat_lahir" name="tempat_lahir" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tggl_lahir" name="tggl_lahir" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                    	<div class="form-group1 bmd-form-group">
                    		<p>Jenis Kelamin :</p>
                    		  <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<br>
							             <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
                    	</div>
                    	</div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Keterangan" name="keterangan" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <input class="form-control" type="file" name="foto" onchange="readURL1(this);">
                <center><br>
                    <div class="form-group col-md-12">
                        <img src="/foto/default-foto.jpg" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
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