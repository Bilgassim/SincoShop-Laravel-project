<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Affiche la liste des fournisseurs
    public function index()
    {
        $suppliers = Supplier::all();
        return view('fournisseurs.index', compact('suppliers'));
    }

    // Affiche le formulaire pour créer un nouveau fournisseur
    public function create()
    {
        return view('fournisseurs.create');
    }

    // Enregistre un nouveau fournisseur dans la base de données
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        try {
            Supplier::create($validatedData);
            return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur créé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la création du fournisseur.']);
        }
    }

    // Affiche les détails d'un fournisseur spécifique
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('fournisseurs.show', compact('supplier'));
    }

    // Affiche le formulaire pour éditer un fournisseur existant
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('fournisseurs.edit', compact('supplier'));
    }

    // Met à jour un fournisseur existant
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        try {
            $supplier = Supplier::findOrFail($id);
            $supplier->update($validatedData);
            return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur mis à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la mise à jour du fournisseur.']);
        }
    }

    // Supprime un fournisseur
    public function destroy($id)
    {
        try {
            $supplier = Supplier::findOrFail($id);
            $supplier->delete();
            return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la suppression du fournisseur.']);
        }
    }
}
