<?php

namespace Foxws\WireUi\Views\Support;

use Foxws\WireUse\Views\Concerns\WithHash;
use Foxws\WireUse\Views\Concerns\WithLivewire;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    use WithHash;
    use WithLivewire;
}
