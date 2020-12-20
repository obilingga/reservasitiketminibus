<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pembayaran;

class PembayaranController extends Controller
{

    public function index(){
        return view('pembayaran',[
            "pembayaran" => Pembayaran::all()
        ]);
        }
    //

    public function simpan(request $request){
       // dd($request->all());

        Pembayaran::create([
            "kodepemesanan" =>$request->kodepemesanan,
            "tglpembayaran" =>$request->tglpembayaran,
            "viapembayaran" =>$request->viapembayaran
            
        ]);
        return redirect()->route('pembayaran.index');
}

public function hapus($id){

    Pembayaran::destroy($id);

    //tampilkan halaman utamanya

    return redirect()->route('pembayaran.index');
}

public function tampil($id){
  //cari datanya
   $pembayaran = Pembayaran::find($id);

 //kirim datanya ke view
 return view('pembayaran',[
     "pembayaran" => Pembayaran::all(),
     "data" => $pembayaran
 ]);
}

public function update(request $request,$id){
    //cari data yang mau diubah
    $pembayaran = Pembayaran::find($id);

    //jalankan perintah rubah
    $pembayaran->kodepemesanan =$request->kodepemesanan;
    $pembayaran->tglpembayaran =$request->tglpembayaran;
    $pembayaran->viapembayaran =$request->viapembayaran;
    $pembayaran->save();

    //jika berhasil tampilkan halaman utama
    return redirect()->route('pembayaran.index');
}
}

