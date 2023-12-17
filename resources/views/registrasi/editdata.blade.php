@extends('layout.laman')
@section('panggil')
<form method="POST" action="{{'/registrasi/'.$data->nama}}">
    @csrf
    @method('put')
	<div>
		<label for="nama">nama :</label>
		<input type="text" name="nama" id="nama" class="fore-control"  value="{{Session::get('nama')}}">
    </div>
	<div>
		<label for="email">email :</label>
		<input type="text" name="email" id="email" class="fore-control"  value="{{Session::get('email')}}">	
    </div>
	<div>
		<label for="tanggallahir">tanggal lahir :</label>
		<input type="date" name="tanggallahir" id="tanggallahir" class="fore-control"  value="{{Session::get('tanggallahir')}}">
    </div>
    <div>
        <label for="nim">nim :</label>
        <input type="text" name="nim" id="nim" class="fore-control"  value="{{Session::get('nim')}}" >
    </div>
    <div>
        <label for="jurusan">jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" class="fore-control"  value="{{Session::get('jurusan')}}">
    </div>
    <div>
        <label for="namaregu">nama regu :</label>
        <input type="text" name="namaregu" id="namaregu" class="fore-control"  value="{{Session::get('namaregu')}}">
    </div>
    <div>
        <label for="semester">semester :</label>
        <input type="text" name="semester" id="semester" class="fore-control"  value="{{Session::get('semester')}}">
    </div>
	<div>
	    <button type="submit">Edit :</button>
        <a class="btn btn-secondry" href="/registrasi">Previous Page</a>
    </div>
	
</form>
@endsection