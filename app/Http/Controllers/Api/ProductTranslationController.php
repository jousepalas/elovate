<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\ProductTranslationService;

class ProductTranslationController extends Controller
{
    public function translate($id, ProductTranslationService $translator)
        {
            $product = Product::findOrFail($id);

            $translated = $translator->translate($product->description);

            $product->translations = $translated;
            $product->save();

            return response()->json([
                'id' => $product->id,
                'original' => $product->description,
                'translated' => $translated,
            ]);
        }
}
