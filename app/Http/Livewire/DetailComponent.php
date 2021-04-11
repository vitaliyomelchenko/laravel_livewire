<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::inRandomOrder()->limit(5)->get();
        // dd($related_products);
        return view('livewire.detail-component', ['product'=>$product, 'popular_products' => $popular_products, 'related_products'=>$related_products])
        ->layout('layouts.master');
    }
}
