<?php

namespace CubeAgency\FilamentJson\Filament\Forms\Components;

use Filament\Forms\Components\Field;

class Json extends Field
{
    protected string $view = 'filament-json::components.fieldset';

    protected function setUp(): void
    {
        parent::setUp();

        $this->columnSpan('full');
    }
}
