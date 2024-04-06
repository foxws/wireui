<?php

namespace Foxws\WireUi\Actions\Components;

use Foxws\WireUse\Views\Components\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class Link extends Component
{
    public function __construct(
        public bool $active = false,
        public bool $external = false,
        public bool $navigate = true,
        public ?string $route = null,
    ) {
    }

    public function render(): View
    {
        return view('wireui::actions.link');
    }

    public function getUrl(): ?string
    {
        return $this->attributes->get('href');
    }

    public function isRoute(): bool
    {
        return $this->hasRoute() && request()->routeIs($this->route);
    }

    public function isRequest(): bool
    {
        return $this->isInternal() && request()->fullUrlIs(
            $this->getUrl()
        );
    }

    public function hasRoute(): bool
    {
        return filled($this->route) && Route::has($this->route);
    }

    public function isInternal(): bool
    {
        if ($this->external) {
            return false;
        }

        if ($this->hasRoute()) {
            return true;
        }

        $url = str($this->getUrl())->trim();

        return $url->is('/') || $url->startsWith(config('app.url'));
    }
}
