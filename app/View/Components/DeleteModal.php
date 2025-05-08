<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component
{

    public $route;
    public $id;
    public $message;
    public $fullWidth;

    public function __construct(
        $route,
        $id,
        $message = 'Are you sure you want to delete this item? This action cannot be undone.',
        $fullWidth = false
    ) {
        $this->route = $route;
        $this->id = $id;
        $this->message = $message;
        if ($fullWidth) {
            $this->fullWidth = "w-full";
        } else {
            $this->fullWidth = "";
        }
    }

    public function render()
    {
        return view('components.delete-modal');
    }
}
