<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Affiche la liste des commandes
    public function index()
    {
        $orders = Order::all();
        return view('commandes.index', compact('orders'));
    }

    // Affiche le formulaire pour créer une nouvelle commande
    public function create()
    {
        return view('commandes.create');
    }

    // Enregistre une nouvelle commande dans la base de données
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        try {
            Order::create($validatedData);
            return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la création de la commande.']);
        }
    }

    // Affiche les détails d'une commande spécifique
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('commandes.show', compact('order'));
    }

    // Affiche le formulaire pour éditer une commande existante
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('commandes.edit', compact('order'));
    }

    // Met à jour une commande existante
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        try {
            $order = Order::findOrFail($id);
            $order->update($validatedData);
            return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la mise à jour de la commande.']);
        }
    }

    // Supprime une commande
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();
            return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la suppression de la commande.']);
        }
    }
}
