<?php

namespace Foxws\WireUi\Ui\Components;

use Foxws\WireUi\Views\Components\Component;
use Illuminate\View\View;

class Card extends Component
{
    public function __construct(
        public bool $vertical = false,
    ) {
    }

    public function render(): View
    {
        return view('wireui::ui.card');
    }
}
