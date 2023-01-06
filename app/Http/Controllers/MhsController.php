<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MhsController extends Controller
{
    //
    public function mhsView(){
        //$allDataUser=User::all();
        $data['allDataMhs']=Mahasiswa::all();
        return view('backend.mhs.view_mhs', $data);
    }
    public function mhsAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.mhs.add_mhs');
    }

    public function mhsStore(Request $request){

        // dd($request);
        $validatedData=$request->validate([
            'textNama' =>'required',
            'NIM'=>'required',
            'prodi'=>'required',
            'jurusan'=>'required',
        ]);

        $data=new Mahasiswa();
        $data->nama=$request->textNama;
        $data->nim=$request->NIM;
        $data->kelas=$request->kelas;
        $data->prodi=$request->prodi;
        $data->jurusan=$request->jurusan;
        $data->lahir=$request->lahir;
        $data->save();
        
        return redirect()->route('mhs.view')->with('info','Tambah User Berhasil');
    }


    public function mhsEdit($id){
        // dd('berhasil masuk controller user edit');
        $editData= Mahasiswa::find($id);
        return view('backend.mhs.edit_mhs', compact('editData'));

    }

    public function mhsUpdate(Request $request, $id){

        // dd($request);
        $validatedData=$request->validate([
            'textNama' =>'required',
            'NIM'=>'required',
            'prodi'=>'required',
            'jurusan'=>'required',
        ]);

        $data=Mahasiswa::find($id);
        $data->nama=$request->textNama;
        $data->nim=$request->NIM;
        $data->kelas=$request->kelas;
        $data->prodi=$request->prodi;
        $data->jurusan=$request->jurusan;
        $data->lahir=$request->lahir;
        $data->save();
        
        return redirect()->route('mhs.view')->with('info','Tambah User Berhasil');
    }

    public function mhsDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData= Mahasiswa::find($id);
        $deleteData->delete();


        return redirect()->route('mhs.view')->with('info','Delete User Berhasil');

    }
}
