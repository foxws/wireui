<?php

namespace Foxws\WireUi\Tests\TestClasses;

use Illuminate\View\Component;

class BladeComponent extends Component
{
    public function render(): string
    {
        return <<<'blade'
        <div {{ $attributes
            ->cssClass([
                'layer' => 'flex flex-nowrap',
                'color' => 'bg-gray-300 opacity-50',
            ])
            ->classMerge()
        }}>
            {{-- wow, such great content here --}}
        </div>
        blade;
    }
}
