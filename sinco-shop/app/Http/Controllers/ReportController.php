<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Exemples de données pour les graphiques
        $products = Product::all();

        // Calcul des labels et des données pour les graphiques
        $stockLabels = $products->pluck('name');
        $stockData = $products->pluck('quantity');
        $salesLabels = $products->pluck('name');
        $salesData = $products->pluck('quantity'); // Remplace ceci par des données réelles de ventes si nécessaire

        return view('rapports.index', [
            'stockLabels' => $stockLabels,
            'stockData' => $stockData,
            'salesLabels' => $salesLabels,
            'salesData' => $salesData,
        ]);
    }
}