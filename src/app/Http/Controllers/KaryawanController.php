<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Karyawan;

class KaryawanController extends Controller
{

    public function index(){
        return view('karyawan',[
            "karyawan" =>Karyawan::all()
        ]);
        }
    //

    public function simpan(request $request){
       // dd($request->all());

       \App\Models\Karyawan::create([
        "kodekaryawan" =>$request->kodekaryawan,
        "namakaryawan" =>$request->namakaryawan,
        "jeniskelamin" =>$request->jeniskelamin,
        "alamatkaryawan" =>$request->alamatkaryawan,
        "nohp" =>$request->nohp,
        "username" =>$request->username,
        "password" =>$request->password
    ]);
    return redirect()->route('karyawan.index');
    }

    public function hapus($id){

        Karyawan::destroy($id);

        //tampilkan halaman utamanya

        return redirect()->route('karyawan.index');
    }

    public function tampil($id){
      //cari datanya
       $karyawan = Karyawan::find($id);

     //kirim datanya ke view
     return view('karyawan',[
         "karyawan" => Karyawan::all(),
         "data" => $karyawan
     ]);
    }

    public function update(request $request,$id){
        //cari data yang mau diubah
        $karyawan = Karyawan::find($id);

        //jalankan perintah rubah
        $karyawan->kodekaryawan =$request->kodekaryawan;
        $karyawan->namakaryawan =$request->namakaryawan;
        $karyawan->jeniskelamin =$request->jeniskelamin;
        $karyawan->alamatkaryawan =$request->alamatkaryawan;
        $karyawan->nohp =$request->nohp;
        $karyawan->username =$request->username;
        $karyawan->password =$request->password;
        $karyawan->save();

        //jika berhasil tampilkan halaman utama
        return redirect()->route('karyawan.index');
    }
}
