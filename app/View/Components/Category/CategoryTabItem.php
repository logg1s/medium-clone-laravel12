<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryTabItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $name = ''
    ) {
    }

    public function shouldRender()
    {
        return !empty($this->name) && is_string($this->name);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category.category-tab-item');
    }
}
