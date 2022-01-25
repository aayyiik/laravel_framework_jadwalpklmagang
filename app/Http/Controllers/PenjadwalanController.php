<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PenjadwalanController extends Controller
{
    public function index()
    {
        $jadwal= Penjadwalan::all();
        return view('penjadwalan.paa.index', ['jadwal'=>$jadwal] );
    }

    public function create(){
        $data['listDosen'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Dosen');
        })->get();
        $data['listMahasiswa'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Mahasiswa');
        })->get();
        $data['listPaa'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Paa');
        })->get();

        return view('penjadwalan.paa.create', $data);

    }

    public function store(Request $request){
   
        \App\Models\Penjadwalan::create($request->all());
        return redirect('/penjadwalan');
    }

    public function edit($id){
       

        $data['listDosen'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Dosen');
        })->get();
        $data['listMahasiswa'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Mahasiswa');
        })->get();
        $data['listPaa'] = User::whereHas('role', function ($query) {
            $query->where('jenis_role', 'Paa');
        })->get();
        
        $data['jadwal'] = Penjadwalan::find($id);

        
        return view('penjadwalan.paa.edit',$data);
    }

    public function update(Request $request, $id){
      $jadwal = Penjadwalan::find($id);
      $jadwal->update($request->all());
      return redirect('/penjadwalan');

    }

    public function delete ($id){
        $jadwal = Penjadwalan::find($id);
        $jadwal->delete($jadwal);

        return redirect('/penjadwalan');
    }
}
