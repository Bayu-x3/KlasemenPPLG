<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\ACeweModel;
use App\Models\KelasModel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreACeweRequest;

class KlasemenACewe extends Controller
{
    public function index()
    {
        $a_cewe = ACeweModel::all();
        return view('cewe.a', compact('a_cewe'));
    }

    public function create()
    {
        // Ambil semua data kelas dari model KelasModel
        $kelases = KelasModel::all(); // seharusnya dari KelasModel
        return view('cewe.createACewe', compact('kelases'));
    }
    

    public function store(StoreACeweRequest $request)
{
    // Cek apakah request membawa kelas_id


    ACeweModel::create($request->all());
    dd($request->all());
    return redirect()->route('cewe.a')->with(['success' => 'Data Cewe klasemen A berhasil disimpan']);
}

}
