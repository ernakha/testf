<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    //
    public function bukuView(){
        //$allDataUser=User::all();
        $data['allDataBuku']=Buku::all();
        return view('backend.buku.view_buku', $data);
    }
    public function bukuAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.buku.add_buku');
    }

    public function bukuStore(Request $request){

        // dd($request);
        $validatedData=$request->validate([
            'kodeBuku' =>'required',
            'judulBuku'=>'required',
            'namaPengarang'=>'required',
        ]);

        $data=new Buku();
        $data->kodeBuku=$request->kodeBuku;
        $data->judulBuku=$request->judulBuku;
        $data->namaPengarang=$request->namaPengarang;
        
        return redirect()->route('buku.view')->with('info','Tambah User Berhasil');
    }


    public function bukuEdit($id){
        // dd('berhasil masuk controller user edit');
        $editData= Buku::find($id);
        return view('backend.buku.edit_buku', compact('editData'));

    }

    public function bukuUpdate(Request $request, $id){

        // dd($request);
        $validatedData=$request->validate([
            'kodeBuku' =>'required',
            'judulBuku'=>'required',
            'namaPengarang'=>'required',
        ]);

        $data=Buku::find($id);
        $data->kodeBuku=$request->kodeBuku;
        $data->judulBuku=$request->judulBuku;
        $data->namaPengarang=$request->namaPengarang;
        $data->save();
        
        return redirect()->route('buku.view')->with('info','Tambah User Berhasil');
    }

    public function bukuDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData= Buku::find($id);
        $deleteData->delete();


        return redirect()->route('buku.view')->with('info','Delete User Berhasil');

    }
}
