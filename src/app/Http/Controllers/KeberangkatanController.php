<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Keberangkatan;

class KeberangkatanController extends Controller
{

    public function index(){
        return view('keberangkatan',[
            "keberangkatan" =>Keberangkatan::all()
        ]);
        }
    //

    public function simpan(request $request){
       // dd($request->all());

        \App\Models\Keberangkatan::create([
            "kodebus" =>$request->kodebus,
            "tanggal" =>$request->tanggal,
            "waktu" =>$request->waktu,
            "kotatujuan" =>$request->kotatujuan,
            "kotaasal" =>$request->kotaasal
        ]);
        return redirect()->route('keberangkatan.index');
    }

    public function hapus($id){

        Keberangkatan::destroy($id);

        //tampilkan halaman utamanya

        return redirect()->route('keberangkatan.index');
    }

    public function tampil($id){
      //cari datanya
       $keberangkatan = Keberangkatan::find($id);

     //kirim datanya ke view
     return view('keberangkatan',[
         "keberangkatan" => Keberangkatan::all(),
         "data" => $keberangkatan
     ]);
    }

    public function update(request $request,$id){
        //cari data yang mau diubah
        $keberangkatan = Keberangkatan::find($id);

        //jalankan perintah rubah
        $keberangkatan->kodebus =$request->kodebus;
        $keberangkatan->tanggal =$request->tanggal;
        $keberangkatan->waktu =$request->waktu;
        $keberangkatan->kotatujuan =$request->kotatujuan;
        $keberangkatan->kotaasal=$request->kotaasal;
        $keberangkatan->save();

        //jika berhasil tampilkan halaman utama
        return redirect()->route('keberangkatan.index');
    }
}
