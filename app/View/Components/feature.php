<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class feature extends Component
{
    public $title;
    public $content;
    public $shadowColor;
    public $startColor;
    public $endColor;
    public function __construct($title, $content, $shadowColor, $startColor, $endColor)
    {
        $this->title = $title;
        $this->content = $content;
        $this->shadowColor = $shadowColor;
        $this->startColor = $startColor;
        $this->endColor = $endColor;
    }
    public function render(): View|Closure|string
    {
        return view('components.feature');
    }
}
