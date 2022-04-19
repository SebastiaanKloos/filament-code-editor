<?php

namespace SebastiaanKloos\FilamentCodeEditor;

use Filament\PluginServiceProvider;

class FilamentCodeEditorServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-code-editor';

    protected array $beforeCoreScripts = [
        'filament-tools' => __DIR__.'/../dist/filament-tools.js',
    ];
}
