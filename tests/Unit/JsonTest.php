<?php

use CubeAgency\FilamentJson\Filament\Forms\Components\Json;
use Filament\Forms\Components\Field;

it('is a filament field', function () {
    expect(Json::make('meta'))->toBeInstanceOf(Field::class);
});

it('keeps the field name', function () {
    expect(Json::make('meta')->getName())->toBe('meta');
});

it('renders through the fieldset view', function () {
    expect(Json::make('meta')->getView())->toBe('filament-json::components.fieldset');
});

it('spans the full column width', function () {
    expect(Json::make('meta')->getColumnSpan('lg'))->toBe('full');
});
