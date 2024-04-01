<?php

namespace App\Http\Controllers;

// use query builder
use Illuminate\Http\Request;

// user eloquent
use App\Models\kategori;

class KategoriController extends Controller
{
    public function index()
    {

        // eloquent

        $kategori = kategori::all();

        return view('kategori', [
            'data' => $kategori,
        ]);
    }

    public function add()
    {
        return view('form_kategori');
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);

        return view('form_kategori', [
            'data' => $kategori
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);
        $old_kode = @$req->old_kode;

        if ($old_kode)
        {
            // mode edit

            // eloquent
            kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        }
        else
        {
            // mode add

            // eloquent

            kategori::create([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
        }

        return redirect('/kategori');
    }

    public function delete($id)
    {
        kategori::find($id)->delete();

        return redirect('/kategori');
    }

}
