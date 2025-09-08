<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Services\ProductTranslationService;

class Translation extends Component
{
    public $productId;
    public $original;
    public $translated;

    public function mount($productId = 51)
    {
        $this->productId = $productId;
        $this->translateProduct();
    }

    public function translateProduct()
    {
        $product = Product::findOrFail($this->productId);

        $this->original = $product->description;

        $translator = app(ProductTranslationService::class);
        $this->translated = $translator->translate($product->description);

        // $product->translations = $this->translated;
        // $product->save();
    }

    public function render()
    {
        return view('livewire.translation', [
            'original' => $this->original,
            'translated' => $this->translated,
        ]);
    }
}
