@extends('layouts.suadmin')
@section('content')

<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>username</th>
            <th>Email</th>
            <th>nohp</th>
            <th>alamat</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $srn)
        <tr>
            <td>{{$srn->id}}</td>
            <td><img src="{{ url('foto/'.$srn->foto) }}" style="border-radius: 50%; width: 50px; height: 50px">{{$srn->nama}}</td>
            <td>{{$srn->username}}</td>
            <td>{{$srn->email}}</td>
            <td>{{$srn->nohp}}</td>
            <td>{{$srn->alamat}}</td>
            <td>
                <a href="/user-admin/edit/{{$srn->id}}" class="btn btn-default waves-effect waves-light pull-right">EDIT</a>
                <a href="/user-admin/delete/{{$srn->id}}" class="btn btn-default waves-effect waves-light pull-right">HAPUS</a>

                @if($srn->role=='2')
                <form method="POST" action="user-admin/status">
                    @csrf
                    <input type="hidden" value="{{$srn->id}}" name="id">
                <button type="submit">Super Admin</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection