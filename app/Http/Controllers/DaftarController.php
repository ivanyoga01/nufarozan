<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umroh;
use App\Models\Daftar;
use App\Models\User;
use Illuminate\Support\Str; // tambahkan kode ini

use App\Mail\NufarozanEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index(){
      return view('daftar',[
        'umroh' => Umroh::all()
      ]);
    }

    public function store(Request $request)
    {
      $request->validate([
        'nik' => ['required', 'unique:daftars'],
      ]);

        $post = Daftar::create([
            'nik' => $request->nik,
            'umroh_id' => $request->paket,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'negara' => $request->negara,
            'nohp' => $request->nohp,
            'rencana' => $request->rencana."-01",
            'ibadah' => $request->ibadah,
        ]);

        if ($post) {
          Mail::to("ivan.yoga16@gmail.com")->send(new NufarozanEmail($request->nama, $request->alamat, $request->nohp));
            return redirect()
                ->route('daftar.index')
                ->with([
                    'success' => 'Anda sudah berhasil Daftar Online'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    // public function test()
    // {
    //   $isi = [
    //     'name' => 'admin',
    //     'email' => 'admin.nufarozan@nufarozan.com',
    //     'password' => 'alunalun',
    //   ];
    //   $isi['password'] = Hash::make($isi['password']);
    //   User::create($isi);
    // }
}
