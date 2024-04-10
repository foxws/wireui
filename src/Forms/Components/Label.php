<?php

namespace Foxws\WireUi\Forms\Components;

use Foxws\WireUi\Views\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;

class Label extends Component
{
    public function __construct(
        public bool $required = false,
        public string|Htmlable|bool|null $error = null,
        public string|Htmlable|null $hint = null,
    ) {
    }

    public function render(): View
    {
        return view('wireui::forms.label');
    }

    public function wireKey(): string
    {
        return $this->attributes->get('for', parent::wireKey());
    }
}
