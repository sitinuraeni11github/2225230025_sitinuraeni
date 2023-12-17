<?php

namespace App\Http\Controllers;
use App\Models\sitinuraeni11;
use Illuminate\Http\Request;

class eni11 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=sitinuraeni11::all();
        return view ('registrasi.output')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('registrasi.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'tanggallahir'=>'required',
            'nim'=>'required',
            'jurusan'=>'required',
            'namaregu'=>'required',
            'semester'=>'required'
        ]);
        $data=[
            'nama'=> $request->input('nama'),
            'email'=> $request->input('email'),
            'tanggallahir'=> $request->input('tanggallahir'),
            'nim'=> $request->input('nim'),
            'jurusan'=> $request->input('jurusan'),
            'namaregu'=> $request->input('namaregu'),
            'semester'=> $request->input('semester')
        ];
        sitinuraeni11::create($data);
        return redirect ('registrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $data = sitinuraeni11::where('nama', $id)->first();
        return view('registrasi.editdata')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'tanggallahir'=>'required',
            'nim'=>'required',
            'jurusan'=>'required',
            'namaregu'=>'required',
            'semester'=>'required'
        ]);
        $data=[
            'nama'=> $request->input('nama'),
            'email'=> $request->input('email'),
            'tanggallahir'=> $request->input('tanggallahir'),
            'nim'=> $request->input('nim'),
            'jurusan'=> $request->input('jurusan'),
            'namaregu'=> $request->input('namaregu'),
            'semester'=> $request->input('semester')
        ];
        sitinuraeni11::where('nama', $id)->update($data);
        return redirect ('registrasi')->with('Selamat Data Berhasil Di Ubah!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sitinuraeni11::where('nama', $id)->delete();
        return redirect ('registrasi')->with('Selamat Data Berhasil Di Hapus!'); 
    }
}
