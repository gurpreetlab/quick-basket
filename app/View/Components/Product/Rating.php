<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Rating extends Component
{
    public $ratings;
    /**
     * Create a new component instance.
     */
    public function __construct($ratings)
    {
        $this->ratings = $ratings;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.rating');
    }
}
