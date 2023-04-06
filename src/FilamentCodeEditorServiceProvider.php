<?php

namespace SebastiaanKloos\FilamentCodeEditor;

use Filament\Facades\Filament;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCodeEditorServiceProvider extends PackageServiceProvider
{
    protected array $beforeCoreScripts = [
        'filament-tools' => __DIR__.'/../dist/filament-tools.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-code-editor');
    }

    public function bootingPackage() {
        Filament::serving(function () {
            Filament::registerScripts($this->beforeCoreScripts, true);
        });
    }
}
