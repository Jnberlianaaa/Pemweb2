<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeMobildata = Tipemobil::all();
        return view('pages.tipe_mobil.index', compact('tipeMobilData'));
    }

    function create()
    {
        return view('pges.tipe_mobil.create');
    }

    function store(request $request)
    {
        $tipeMobilData = $request ->validate([
            'tipe' => 'required'
        ]);

        TipeMobil::create($tipeMobilData);

        return redirect()->to('/tipemobil');
    }

    function edit($id)
   {
    $tipeMobilData = TipeMobil::find($id);
    return view('pages.tipe_mobil.edit', compact('tipeMobilData'));
   } 

   function update($id, Request $request)
   {
    $validasiTipemobil = $request ->validate([
        'tipe' => 'required'
    ]);
    
    //cari data berdasarkan id kemudian lakukan update
    $tipeMobilData = TipeMobil::find($id);
    $tipeMobilData -> update($validasiTipemobil);

    // Balik ke halaman sebelumnya
    return redirect()->to('/tipemobil');
   }

   function delete($id)
   {
    $tipeMobilData = TipeMobil::find($id);
    $tipeMobilData->delete();
    return redirect()->to('/tipemobil');
   }
}
