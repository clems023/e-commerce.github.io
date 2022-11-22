<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public function mount($slug)
    {
        # code...
        $this->slug = $slug;
    }

    public function render()
    {

        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.details-component', ['product' => $product]);
    }
}
