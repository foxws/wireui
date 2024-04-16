<?php

namespace Foxws\WireUi\Layout\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\View\View;

class Container extends Component
{
    public function render(): View
    {
        return view('wireui::layout.container');
    }
}
