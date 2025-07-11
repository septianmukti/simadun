<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    public function beranda()
    {
        return view('web.beranda');
    }

    public function about()
    {
        return view('web.about');
    }

    public function term()
    {
        return view('web.syarat-ketentuan');
    }

    public function DataMedia()
    {
        try {
            $media = DB::table('pengajuans')
                ->join('users', 'pengajuans.user_id', '=', 'users.id')
                ->select(
                    'users.name',
                    'users.jenis_perusahaan',
                    'users.nama_perusahaan',
                    'users.media_name'
                )
                ->where('pengajuans.status', 'disetujui')
                ->orderBy('pengajuans.id', 'desc')
                ->get();
            return view('web.media-list', ['media' => $media]);
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }
}
