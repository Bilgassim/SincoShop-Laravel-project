<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Affiche la liste des produits
    public function index()
    {
        $products = Product::all();
        return view('produits.index', compact('products'));
    }

    // Affiche le formulaire pour créer un nouveau produit
    public function create()
    {
        return view('produits.create');
    }

    // Enregistre un nouveau produit dans la base de données
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        try {
            Product::create($validatedData);
            return redirect()->route('produits.index')->with('success', 'Produit créé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la création du produit.']);
        }
    }

    // Affiche les détails d'un produit spécifique
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('produits.show', compact('product'));
    }

    // Affiche le formulaire pour éditer un produit existant
    public function edit($id)
    {
        $produit = Product::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

    // Met à jour un produit existant
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        try {
            $product = Product::findOrFail($id);
            $product->update($validatedData);
            return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la mise à jour du produit.']);
        }
    }

    // Supprime un produit
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la suppression du produit.']);
        }
    }
}
