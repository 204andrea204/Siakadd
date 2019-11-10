@extends('layouts.suadmin')
@section('content')

<form action="{{ url('/galeri/upload') }}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" name="profile_image[]" id="exampleInputFile" multiple />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection