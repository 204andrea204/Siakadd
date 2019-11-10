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
                  <form method="POST" action="/ekskul/update" enctype="multipart/form-data">
                  	@csrf
                    <input type="hidden" name="id" value="{{$ekskuls->id}}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama Ekskul" name="nama_eks" type="text" class="form-control" value="{{$ekskuls->nama_eks}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama Pelatih" name="nama_pelatih" type="text" class="form-control" value="{{$ekskuls->nama_pelatih}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-5">
                    		<div class="form-group bmd-form-group">
			            			<select class="form-control" name="sekbid_id">
                            <option selected>Pilih Sekbid......</option>
                            @foreach($sekbids as $j)
                              @if($j->id == $ekskuls->sekbid_id)
                            <option value="{{$j->id}}" selected>{{$j->nama}}</option>
                            @else
                            <option value="{{$j->id}}">{{$j->nama}}</option>
                            @endif
                            @endforeach
                        </select>
			        		</div>
			        	</div>

			           <div class="col-md-7">
                        <div class="form-group bmd-form-group">
                          <input placeholder=" Nama Koordinator" name="koordinator" type="text" class="form-control" value="{{$ekskuls->koordinator}}">
                        </div>
                      </div>
			        </div>

                <div class="form-group">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="keterangan">{{$ekskuls->keterangan}}</textarea>
                        </div>
                </div>
                <div class="form-group">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor2" class="contact-message" cols="30" rows="10" name="visimisi">{{$ekskuls->visimisi}}</textarea>
                        </div>
                </div>
			        <div class="row">
                      <div class="col-md-7">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Jadwal Latihan" name="jadwal" type="text" class="form-control" value="{{$ekskuls->jadwal}}">
                        </div>
                      </div>
                    </div>

                    <input class="form-control" type="file" name="foto" onchange="readURL1(this);" value="{{$ekskuls->foto}}">
                <center><br>
                    <div class="form-group col-md-12">
                        <img src="{{url('foto/ekskul/'. $ekskuls->foto)}}" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 20px; border-radius: 50%;">
                    </div>
                </center>

                    <button type="submit" class="btn btn-primary pull-right">Edit Data</button>
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