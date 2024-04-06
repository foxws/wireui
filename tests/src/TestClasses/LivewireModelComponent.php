<?php

namespace Foxws\WireUi\Tests\TestClasses;

use Foxws\WireUi\Tests\Models\Post;
use Livewire\Component;

class LivewireModelComponent extends Component
{
    public Post $post;

    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- wow, such great article content here --}}
        </div>
        HTML;
    }
}
