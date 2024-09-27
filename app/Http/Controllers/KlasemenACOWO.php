<?php

namespace App\Http\Controllers;

use App\Models\ACowoModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreACowoRequest;

class KlasemenACOWO extends Controller
{
public function index()
{
     $a_cowo = ACowoModel::all();
    return view('cowo.a', compact('a_cowo'));
    }

    public function create ()
    {
        return view('cowo.createACowo');
    }

    public function store(StoreACowoRequest $request)
    {
        ACowoModel::create($request->all());
        return redirect()->route('cowo.a')->with(['success' => 'Data Klasemen A Cowo berhasil disimpan']);
    }
}
