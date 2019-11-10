<form class="form-horizontal" role="form" action="/user-admin/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">nama</label>
        <div class="col-md-10">
            <input type="hidden" value="{{$user->id}}" name="id">
            <input type="text" id="example-email" name="nama" class="form-control" placeholder="nama" value="{{$user->nama}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">username</label>
        <div class="col-md-10">
            <input type="text" id="example-email" name="username" class="form-control" placeholder="username" value="{{$user->username}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">email</label>
        <div class="col-md-10">
            <input type="text" id="example-email" name="email" class="form-control" placeholder="email" value="{{$user->email}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">password</label>
        <div class="col-md-10">
            <input type="text" id="example-email" name="password" class="form-control" placeholder="password" value="{{$user->password}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">nohp</label>
        <div class="col-md-10">
            <input type="text" id="example-email" name="nohp" class="form-control" placeholder="nohp" value="{{$user->nohp}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">Foto</label>
        <div class="col-md-10">
            <img class="img" src="{{url('foto/'. $user->foto)}}" id="blah1" style="width: 150px; height: 150px;">
            <input class="form-control btn btn-round" name="foto" type="file" onchange="readURL1(this);">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="example-email">Alamat</label>
        <div class="col-md-10">
            <input type="text" id="example-email" name="alamat" class="form-control" placeholder="Alamat" value="{{$user->alamat}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">Save changes</button>
    <a href="/user-admin" class="btn btn-primary waves-effect waves-light">Kembali</a>
</form>