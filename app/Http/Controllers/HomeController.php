<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('child_home');
    }

    public function about()
    {
        return view('child_about');
    }

    // public function test ($id = 0)
    // {
    //     $nama ='kepin';

    //     return view('test', ['nama' => $nama, 'id' => $id]);
    // }

    public function tambah()
    {
        return view('input');
    }

    public function simpan(Request $request)
    {
        $nama = $request ->input('nama');
        $kategori = $request ->input('kategori');
        $harga = $request ->input('harga');
        $ket = $request ->input('ket');

        return view('result',[
        'nama' => $nama,
        'kategori' => $kategori,
        'harga' => $harga,
        'keterangan' =>$ket,
    
        ]);
    }

    public function test()
    {
        DB::table('makanans')->insert([
            'nama' => 'kucing',
            'kategori' => 'hewan',
            'harga' => '20000000',
            'ket' => 'lucu',
        ]);

    
        return 'masuk test';
    }
}

