<?php

namespace Foxws\WireUi\Layout\Components;

use Foxws\WireUse\Views\Components\Component;
use Illuminate\View\View;

class Container extends Component
{
    public function render(): View
    {
        return view('wireui::layout.container');
    }
}
