<?php

namespace Foxws\WireUi\Actions\Components;

use Foxws\WireUi\Views\Support\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class Link extends Component
{
    public function __construct(
        public bool $active = false,
        public bool $external = false,
        public bool $navigate = true,
        public ?string $route = null,
        public mixed $parameters = null,
        public bool $absolute = true,
    ) {
    }

    public function render(): View
    {
        return view('wireui::actions.link');
    }

    public function getUrl(): ?string
    {
        if (! $this->hasRoute()) {
            return $this->attributes->get('href');
        }

        return route(
            name: $this->route,
            parameters: $this->parameters,
            absolute: $this->absolute
        );
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
