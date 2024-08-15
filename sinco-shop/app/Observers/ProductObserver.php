<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\Activity;

class ProductObserver
{
    public function created(Product $product)
    {
        Activity::create([
            'description' => 'Un nouveau produit a été ajouté : ' . $product->name,
        ]);
    }

    public function updated(Product $product)
    {
        Activity::create([
            'description' => 'Le produit a été mis à jour : ' . $product->name,
        ]);
    }

    public function deleted(Product $product)
    {
        Activity::create([
            'description' => 'Le produit a été supprimé : ' . $product->name,
        ]);
    }
}
