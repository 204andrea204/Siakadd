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
                  <form method="POST" action="/berita/update" enctype="multipart/form-data">
                  	@csrf
                    <input type="hidden" name="id" value="{{$a->id}}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Judul" name="judul" type="text" class="form-control" value="{{$a->judul}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Pembuat" name="pembuat" type="text" class="form-control" value="{{$a->pembuat}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Tanggal Di Upload" name="tanggal" type="date" class="form-control"value="{{$a->tanggal}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Link Video" name="video" type="text" class="form-control" value="{{$a->video}}">
                        </div>
                      </div>
                    </div>
                    
			                 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <div class="card-header">
                            <h6 style="color: white;">Isi Berita</h6>
                          </div>
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="isi">{{$a->isi}}</textarea>
                        </div>
                      </div>
                    </div>
                    <input class="form-control" type="file" name="foto" onchange="readURL1(this);" value="{{$a->foto}}">
                <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('foto/berita/'. $a->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
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