<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DsnController extends Controller
{
    //
    public function dsnView(){
        //$allDataUser=User::all();
        $data['allDataDsn']=Dosen::all();
        return view('backend.dsn.view_dsn', $data);
    }
    public function dsnAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.dsn.add_dsn');
    }

    public function dsnStore(Request $request){

        // dd($request);
        $validatedData=$request->validate([
            'textNama' =>'required',
            'NIP'=>'required',
        ]);

        $data=new Dosen();
        $data->nama=$request->textNama;
        $data->nip=$request->NIP;
        $data->jabatan=$request->jabatan;
        $data->email=$request->email;
        $data->save();
        
        return redirect()->route('dsn.view')->with('info','Tambah User Berhasil');
    }


    public function dsnEdit($id){
        // dd('berhasil masuk controller user edit');
        $editData= Dosen::find($id);
        return view('backend.dsn.edit_dsn', compact('editData'));

    }

    public function dsnUpdate(Request $request, $id){

        // dd($request);
        $validatedData=$request->validate([
            'textNama' =>'required',
            'NIP'=>'required',
        ]);

        $data=Dosen::find($id);
        $data->nama=$request->textNama;
        $data->nip=$request->NIP;
        $data->jabatan=$request->jabatan;
        $data->email=$request->email;
        $data->save();
        
        return redirect()->route('dsn.view')->with('info','Tambah User Berhasil');
    }

    public function dsnDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData= Dosen::find($id);
        $deleteData->delete();


        return redirect()->route('dsn.view')->with('info','Delete User Berhasil');

    }
}
