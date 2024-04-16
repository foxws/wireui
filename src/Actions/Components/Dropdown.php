<?php

namespace Foxws\WireUi\Actions\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;

class Dropdown extends Component
{
    public function __construct(
        public string|Htmlable|null $actions = null,
    ) {
    }

    public function render(): View
    {
        return view('wireui::actions.dropdown');
    }
}
