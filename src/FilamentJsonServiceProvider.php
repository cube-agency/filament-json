<?php

namespace CubeAgency\FilamentJson;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJsonServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-json';

    public static string $viewNamespace = 'filament-json';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToStarRepoOnGitHub('cube-agency/filament-json');
            });
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
    }
}
