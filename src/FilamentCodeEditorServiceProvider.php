<?php

namespace SebastiaanKloos\FilamentCodeEditor;

use Filament\Facades\Filament;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCodeEditorServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-code-editor';

    protected array $beforeCoreScripts = [
        'filament-tools' => __DIR__.'/../dist/filament-tools.js',
    ];
    
    public function configurePackage(Package $package): void
    {
    }

    public function packageRegistered()
    {
        Filament::serving(function () {
            Filament::registerScripts($this->beforeCoreScripts, true);
        });
    }
}
