<?php

namespace Foxws\WireUi\Actions\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;

class Button extends Component
{
    public function __construct(
        public string|Htmlable|null $label = '',
    ) {
    }

    public function render(): View
    {
        return view('wireui::actions.button');
    }
}
