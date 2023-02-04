<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProduitController extends Controller
{

    public function index()
    {
        $produits = produit::all();
        return view('list', compact('produits'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required'
        ]);
        produit::create($data);
        return back();
    }

    public function show(produit $produit)
    {
        //
    }

    public function edit(produit $produit)
    {
        //
    }

    public function update(Request $request, produit $produit, produit $id)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required'
        ]);

        produit::table('produit')->where('id', $id)->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix
        ]);
        return view('edit');
    }

    public function destroy(produit $produit)
    {
        $produit->delete();
        return back();
    }
}
