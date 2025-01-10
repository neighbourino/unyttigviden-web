<?php

namespace App\View\Components\Mockups;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Phone extends Component
{

    public $mockupImage = 'https://via.placeholder.com/400x800';
    /**
     * Create a new component instance.
     */
    public function __construct($mockupImage = null)
    {
        if ($mockupImage) {
            $this->mockupImage = $mockupImage;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mockups.phone');
    }
}
