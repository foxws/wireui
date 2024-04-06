<?php

namespace Foxws\WireUi\Forms\Components;

use Foxws\WireUse\Views\Components\Component;
use Illuminate\View\View;

class Input extends Component
{
    public function render(): View
    {
        return view('wireui::forms.input');
    }
}
