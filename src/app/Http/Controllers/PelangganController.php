<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        return view('home',[
            "home" => \App\Models\Pelanggan::all()
        ])
        ;
    }
    
    //
    public function simpan(request $request){
    //dd($request->all());
    \App\Models\Pelanggan::create([
        "kodepelanggan" => $request->kodepelanggan,
        "noktp" => $request->noktp,
        "namapelanggan" => $request->namapelanggan,
        "jeniskelamin" => $request->jeniskelamin,
        "alamatpelanggan" => $request->alamatpelanggan,
        "nomortelp" => $request->nomortelp,
        "email" => $request->email
    ]); 

    return redirect()->route('home.index');
    }

    public function hapus($id){

        Pelanggan::destroy($id);

        //tampilkan halaman utamanya

        return redirect()->route('home.index');
    }

    public function tampil($id){
        //cari datanya
         $home = Pelanggan::find($id);
  
       //kirim datanya ke view
       return view('home',[
           "home" => Pelanggan::all(),
           "data" => $home
       ]);
      }
  
      public function update(request $request,$id){
          //cari data yang mau diubah
          $home = Pelanggan::find($id);
  
          //jalankan perintah rubah
          $home->kodepelanggan =$request->kodepelanggan;
          $home->noktp =$request->noktp;
          $home->namapelanggan =$request->namapelanggan;
          $home->jeniskelamin =$request->jeniskelamin;
          $home->alamatpelanggan =$request->alamatpelanggan;
          $home->nomortelp =$request->nomortelp;
          $home->email =$request->email;
          $home->save();
  
          //jika berhasil tampilkan halaman utama
          return redirect()->route('home.index');
      }
}
