<?php

use CubeAgency\FilamentJson\Filament\Forms\Components\Json;
use Filament\Forms\Components\TextInput;

it('registers the nested schema as child components', function () {
    $field = Json::make('meta')
        ->schema([
            $title = TextInput::make('title'),
            $description = TextInput::make('description'),
        ]);

    expect($field->getDefaultChildComponents())->toBe([$title, $description]);
});

it('has no child components by default', function () {
    expect(Json::make('meta')->getDefaultChildComponents())->toBe([]);
});
