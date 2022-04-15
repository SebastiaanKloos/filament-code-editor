<?php

namespace SebastiaanKloos\FilamentCodeeditor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SebastiaanKloos\FilamentCodeeditor\Commands\FilamentCodeeditorCommand;

class FilamentCodeeditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-codeeditor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-codeeditor_table')
            ->hasCommand(FilamentCodeeditorCommand::class);
    }
}
