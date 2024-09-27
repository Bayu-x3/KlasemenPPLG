<?php

namespace App\Http\Controllers;

use App\Models\BCeweModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreBCeweRequest;

class KlasemenBCewe extends Controller
{
    public function index()
    {
        $b_cewe = BCeweModel::all();
        return view('cewe.b', compact('b_cewe'));
    }

    public function create ()
    {
        return view('cewe.createBCewe');
    }

    public function store(StoreBCeweRequest $request)
    {
        BCeweModel::create($request->all());
        return redirect()->route('cewe.b')->with(['success' => 'Data Klasemen B Cewe berhasil disimpan']);
    }
}
