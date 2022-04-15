<?php

namespace SebastiaanKloos\FilamentCodeeditor\Commands;

use Illuminate\Console\Command;

class FilamentCodeeditorCommand extends Command
{
    public $signature = 'filament-codeeditor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
