<?php

namespace Foxws\WireUi;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WireUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('wireui')
            ->hasConfigFile()
            ->hasViews()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile();
            });
    }

    public function bootingPackage(): void
    {
        $this
            ->registerComponents()
            ->registerLivewire();
    }

    protected function registerComponents(): static
    {
        if (config('wireui.register_components') === false) {
            return $this;
        }

        WireUi::registerComponents(
            path: __DIR__,
            namespace: 'Foxws\\WireUi\\',
            prefix: config('wireui.view_prefix'),
        );

        return $this;
    }

    protected function registerLivewire(): static
    {
        if (config('wireui.register_components') === false) {
            return $this;
        }

        WireUi::registerLivewireComponents(
            path: __DIR__,
            namespace: 'Foxws\\WireUi\\',
            prefix: config('wireui.view_prefix'),
        );

        return $this;
    }
}
