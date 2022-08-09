<?php

namespace App\Http\Controllers;
use App\Models\Umroh;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.paket', [
          'umrohs' => Umroh::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
          'nama' => 'required',
          'biaya' => 'required',
          'durasi' => 'required',
          'hotel' => 'required|min:1|max:5',
          'keberangkatan' => 'required',
          'maskapai' => 'required',
        ]);

        $post = Umroh::create([
          'nama' => $request->nama,
          'biaya' => $request->biaya,
          'durasi' => $request->durasi,
          'hotel' => $request->hotel,
          'keberangkatan' => $request->keberangkatan,
          'maskapai' => $request->maskapai,
          'img' => '300x300.png',
        ]);

        if ($post) {
          return redirect()->route('paket.index')->with([
            'success' => 'Data Berhasil Ditambahkan!'
          ]);
        }else {
          return redirect()->route('paket.index')->with([
            'error' => 'Penambahan Data Gagal, Hubungi Admin!'
          ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Umroh::findorFail($id);

      $post->update([
        'nama' => $request->nama,
        'biaya' => $request->biaya,
        'durasi' => $request->durasi,
        'hotel' => $request->hotel,
        'keberangkatan' => $request->keberangkatan,
        'maskapai' => $request->maskapai,
      ]);

      if ($post) {
        return redirect()->route('paket.index')->with([
          'success' => 'Update Berhasil !'
        ]);
      }else {
        return redirect()->route('paket.index')->with([
          'error' => 'Update Gagal, Hubungi Admin!'
        ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Umroh::findorFail($id);

      $post->delete();

      if ($post) {
        return redirect()->route('paket.index')->with([
          'success' => 'Data Berhasil Dihapus !'
        ]);
      }else {
        return redirect()->route('paket.index')->with([
          'error' => 'Hapus Gagal, Hubungi Admin!'
        ]);
      }
    }
}
