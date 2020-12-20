<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bus;

class BusController extends Controller
{
    public function index(){
    return view('bus',[
        "bus" => Bus::all()
    ]);
    }
    //

    public function simpan(request $request){
      // dd($request->all());
      Bus::create([
          "kodekaryawan" =>$request->kodekaryawan,
          "kelas" =>$request->kelas,
          "nomorpol" =>$request->nomorpol,
          "driver" =>$request->driver,
          "kapasitaspenumpang" =>$request->kapasitaspenumpang
      ]);
      return redirect()->route('bus.index');
    }

    public function hapus($id){

        Bus::destroy($id);

        //tampilkan halaman utamanya

        return redirect()->route('bus.index');
    }

    public function tampil($id){
      //cari datanya
       $bus = Bus::find($id);

     //kirim datanya ke view
     return view('bus',[
         "bus" => Bus::all(),
         "data" => $bus
     ]);
    }

    public function update(request $request,$id){
        //cari data yang mau diubah
        $bus = Bus::find($id);

        //jalankan perintah rubah
        $bus->kodekaryawan =$request->kodekaryawan;
        $bus->kelas =$request->kelas;
        $bus->nomorpol =$request->nomorpol;
        $bus->driver =$request->driver;
        $bus->kapasitaspenumpang =$request->kapasitaspenumpang;
        $bus->save();

        //jika berhasil tampilkan halaman utama
        return redirect()->route('bus.index');
    }
}
