<?php

namespace Foxws\WireUi\Navigation\Components;

use Foxws\WireUi\Views\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;

class Navbar extends Component
{
    public function __construct(
        public string|Htmlable|null $start = null,
        public string|Htmlable|null $end = null,
    ) {
    }

    public function render(): View
    {
        return view('wireui::navigation.navbar');
    }
}
