<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchBar extends Component
{
    public $action;
    public $placeholder;
    public $submitLabel;
    public $resetLabel;
    public $method;

    public function __construct(
        $action = '',
        $placeholder = 'Search...',
        $submitLabel = 'Search',
        $resetLabel = 'Reset',
        $method = 'GET'
    ) {
        $this->action = $action;
        $this->placeholder = $placeholder;
        $this->submitLabel = $submitLabel;
        $this->resetLabel = $resetLabel;
        $this->method = strtoupper($method); // Normalize to uppercase
    }


    public function render()
    {
        return view('components.search-bar');
    }
}
