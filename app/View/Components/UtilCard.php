<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UtilCard extends Component
{
    public $title;
    public $description;
    public $buttonText;
    public $buttonUrl;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $buttonText, $buttonUrl)
    {
        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->buttonUrl = $buttonUrl;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.util-card');
    }
}
