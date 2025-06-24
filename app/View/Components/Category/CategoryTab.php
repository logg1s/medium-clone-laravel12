<?php

namespace App\View\Components\Category;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryTab extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $categories)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.category.category-tab");
    }
}
