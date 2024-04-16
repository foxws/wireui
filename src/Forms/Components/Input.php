<?php

namespace Foxws\WireUi\Forms\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\View\View;

class Input extends Component
{
    public function render(): View
    {
        return view('wireui::forms.input');
    }
}
