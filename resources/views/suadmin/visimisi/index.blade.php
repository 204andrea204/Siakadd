@extends('layouts.suadmin')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title" style="color: white; font-family:Monaco;">Visi Dan Misi</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/visimisi/update" enctype="multipart/form-data">
                    @csrf

                    <?php
                        $visimisi = \App\Visimisi::all()->where('tipe', 1);
                    ?>
                    @foreach ($visimisi as $q)
                    <input type="hidden" name="id_visi" value="{{$q->id}}">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor1" class="contact-message" cols="30" rows="10" name="visi">{!!$q->isi!!}</textarea>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    <?php
                        $visimisi = \App\Visimisi::all()->where('tipe', 2);
                    ?>
                    @foreach ($visimisi as $q)
                    <input type="hidden" name="id_misi" value="{{$q->id}}">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <textarea id="ckeditor2" class="contact-message" cols="30" rows="10" name="misi">{!!$q->isi!!}</textarea>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    

                    <button type="submit" class="btn btn-primary pull-right">Edit Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
    </div>
</div>

@endsection
