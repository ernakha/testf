<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PgwController extends Controller
{
    //
    public function pgwView(){
        //$allDataUser=User::all();
        $datapgw['allDataPgw']=Pegawai::all();
        return view('backend.pgw.view_pgw', $datapgw);
    }
    public function pgwAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.pgw.add_pgw');
    }

    public function pgwStore(Request $request){

        // dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $datapgw=new Pegawai();
        $datapgw->nama=$request->textNama;
        $datapgw->nik=$request->NIK;
        $datapgw->bagian=$request->bagian;
        $datapgw->telp=$request->telp;
        $datapgw->save();
        
        return redirect()->route('pgw.view')->with('info','Tambah User Berhasil');
    }


    public function pgwEdit($id){
        // dd('berhasil masuk controller user edit');
        $editDatapgw= Pegawai::find($id);
        return view('backend.pgw.edit_pgw', compact('editDatapgw'));

    }

    public function pgwUpdate(Request $request, $id){

        // dd($request);
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);

        $datapgw=Pegawai::find($id);
        $datapgw->nama=$request->textNama;
        $datapgw->nik=$request->NIK;
        // $data->password=bcrypt($request->password);
        $datapgw->save();
        
        return redirect()->route('pgw.view')->with('info','Tambah User Berhasil');
    }

    public function pgwDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteDatapgw= Pegawai::find($id);
        $deleteDatapgw->delete();


        return redirect()->route('pgw.view')->with('info','Delete User Berhasil');

    }
}
