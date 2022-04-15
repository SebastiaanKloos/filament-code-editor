<?php

namespace SebastiaanKloos\FilamentCodeeditor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SebastiaanKloos\FilamentCodeeditor\FilamentCodeeditor
 */
class FilamentCodeeditor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-codeeditor';
    }
}
