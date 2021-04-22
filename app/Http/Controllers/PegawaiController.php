<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\List_;

class PegawaiController extends Controller
{
        public function list()
    {
        $hasil = DB::select('select * from pegawai');
        return view('list-pegawai', ['data' => $hasil]);
    }
    public function simpan(Request $req)
    {
        DB::insert(
            'insert into pegawai (nip, nama_pegawai, alamat) values (?, ?, ?)',
            [$req->nip, $req->nama_pegawai, $req->alamat]
        );
        $hasil = DB::select('select * from pegawai');
        return view('list-pegawai', ['data' => $hasil]);
    }
    public function hapus($req)
    {
        Log::info('proses hapus dengan id=' . $req);
        DB::delete('delete from pegawai where id = ?', [$req]);

        $hasil = DB::select('select * from pegawai');
        return view('list-pegawai', ['data' => $hasil]);
    }
    public function ubah($req)
    {
        $hasil = DB::select('select * from pegawai where id = ?', [$req]);
        return view('form-ubah', ['data' => $hasil]);
    }
    public function rubah(Request $req)
    {
        Log::info('Hallo');
        Log::info($req);
        DB::update(
            'update pegawai set ' .
                'nip=?, ' .
                'nama_pegawai=?, ' .
                'alamat=? where id=? ',
            [
                $req->nip,
                $req->nama_pegawai,
                $req->alamat,
                $req->id
            ]
        );
        $hasil = DB::select('select * from pegawai');
        return view('list-pegawai', ['data' => $hasil]);
    }
}
