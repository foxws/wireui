<?php

namespace Foxws\WireUi\Forms\Components;

use Foxws\WireUse\Views\Components\Component;
use Illuminate\View\View;

class Checkbox extends Component
{
    public function render(): View
    {
        return view('wireui::forms.checkbox');
    }
}
