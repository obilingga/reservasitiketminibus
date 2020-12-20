<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index(){
        return view('pemesanan',[
            "pemesanan" =>Pemesanan::all()
        ]);
        }

    //
    public function simpan(request $request){
       // dd($request->all());

       Pemesanan::create([
        "kodekaryawan" =>$request->kodekaryawan,
        "kodebus" =>$request->kodebus
    ]);
    return redirect()->route('pemesanan.index');
    }

    public function hapus($id){

        Pemesanan::destroy($id);

        //tampilkan halaman utamanya

        return redirect()->route('pemesanan.index');
    }

    public function tampil($id){
        //cari datanya
         $pemesanan = Pemesanan::find($id);
  
       //kirim datanya ke view
       return view('pemesanan',[
           "pemesanan" => Pemesanan::all(),
           "data" => $pemesanan
       ]);
      }
  
      public function update(request $request,$id){
          //cari data yang mau diubah
          $pemesanan = Pemesanan::find($id);
  
          //jalankan perintah rubah
          $pemesanan->kodekaryawan =$request->kodekaryawan;
          $pemesanan->kodebus =$request->kodebus;
          $pemesanan->save();
  
          //jika berhasil tampilkan halaman utama
          return redirect()->route('pemesanan.index');
      }
}
