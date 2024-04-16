<?php

namespace Foxws\WireUi\Layout\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\View\View;

class Join extends Component
{
    public function __construct(
        public bool $vertical = false,
    ) {
    }

    public function render(): View
    {
        return view('wireui::layout.join');
    }
}
