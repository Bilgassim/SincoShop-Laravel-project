<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $inStock = Product::where('quantity', '>', 0)->count();
    $outOfStock = Product::where('quantity', 0)->count();
    $lowStock = Product::where('quantity', '<', 10)->count();

    $popularProducts = Product::withCount('sales')->orderBy('sales_count', 'desc')->take(5)->get();
    $recentActivities = Activity::latest()->take(10)->get();
    $lowStockProducts = Product::where('quantity', '<', 10)->get(); // Ajoutez cette ligne pour récupérer les produits à faible stock

    return view('dashboard.index', compact('inStock', 'outOfStock', 'lowStock', 'popularProducts', 'recentActivities', 'lowStockProducts'));
}

    
}
