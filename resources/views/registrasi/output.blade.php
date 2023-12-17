@extends('layout.laman')
@section('panggil')
<a href="/"></a>
<table class=table border="3" cellpanding="15" cellspacing="2">
    <thead>
        <tr>
            <th>nama</th>
            <th>email</th>
            <th>tanggal lahir</th>
            <th>nim</th>
            <th>jurusan</th>
            <th>nama regu</th>
            <th>semester</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
         <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->tanggallahir}}</td>
            <td>{{$item->nim}}</td>
            <td>{{$item->jurusan}}</td>
            <td>{{$item->namaregu}}</td>
            <td>{{$item->semester}}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{url('/registrasi/'.$item->nama.'/edit')}}">Edit Data</a>
                <form onsubmit="return confirm('Apakah anda yakin akan hapus?')" class="d-inline" action="{{'/registrasi/'.$item->nama}}" method="post">@csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus Data</button>
                </form>
            </td>
         </tr>   
        @endforeach
    </tbody>
</table>
@endsection