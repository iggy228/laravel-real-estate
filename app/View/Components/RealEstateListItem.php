<?php

namespace App\View\Components;

use App\Models\RealEstate;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RealEstateListItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public RealEstate $realEstate)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.real-estate-list-item');
    }
}
