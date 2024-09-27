<?php

namespace App\Http\Controllers;

use App\Models\BCowoModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreBCowoRequest;

class KlasemenBCOWO extends Controller
{
    public function index()
    {
        $b_cowo = BCowoModel::all();
        return view('cowo.b', compact('b_cowo'));
    }

    public function create ()
    {
        return view('cowo.createBCowo');
    }

    public function store(StoreBCowoRequest $request)
    {
        BCowoModel::create($request->all());
        return redirect()->route('cowo.b')->with(['success' => 'Data klasemen cowo B berhasil disimpan']);
    }
}
