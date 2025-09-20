<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SafeImage extends Component
{
    public $src;
    public $alt;
    public $class;

    public function __construct($src = null, $alt = '', $class = '')
    {
        $this->src = $src ?: 'images/no-image.png';
        $this->alt = $alt;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.safe-image');
    }
}
