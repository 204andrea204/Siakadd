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
                  <form method="POST" action="/prestasi/add" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama Prestasi" name="nama_pres" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="tingkat" name="tingkat" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Peraih" name="peraih" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    
			                 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <div class="card-header">
                            <h6 style="color: white;">Keterangan</h6>
                          </div>
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="keterangan"></textarea>
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