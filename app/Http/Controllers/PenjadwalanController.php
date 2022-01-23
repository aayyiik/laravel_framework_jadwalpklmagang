<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use App\Models\User;
use Illuminate\Http\Request;

class PenjadwalanController extends Controller
{
    public function index()
    {
        $jadwal= Penjadwalan::all();
        return view('penjadwalan.paa.index', ['jadwal'=>$jadwal]);
    }

    public function create(){
        $data['listDosen'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Dosen');
        })->get();
        $data['listMahasiswa'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Mahasiswa');
        })->get();

        return view('penjadwalan.paa.create', $data);

    }

    public function store(Request $request){
        $validatedRequest = $request->validate([
            'id_paa' => ['required'],
            'id_dosen' => ['required'],
            'id_mahasiswa' => ['required'],
            'tgl_sidang' => ['required'],
            'ruang_sidang' => ['required'],
            'semester' => ['required'],
        ]);

        Penjadwalan::create($validatedRequest);

        return redirect('penjadwalan/paa/index');
    }
}
