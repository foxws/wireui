<?php

namespace Foxws\WireUi\Forms\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\View\View;

class Schema extends Component
{
    public function render(): View
    {
        return view('wireui::forms.schema');
    }
}
