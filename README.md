# JSON field for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cube-agency/filament-json.svg?style=flat-square)](https://packagist.org/packages/cube-agency/filament-json)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cube-agency/filament-json/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cube-agency/filament-json/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cube-agency/filament-json/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cube-agency/filament-json/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cube-agency/filament-json.svg?style=flat-square)](https://packagist.org/packages/cube-agency/filament-json)

Basic Filament field to save data as JSON

## Installation

You can install the package via composer:

```bash
composer require cube-agency/filament-json
```

## Usage

Add json column to your table:

```php
$table->json('meta')->nullable();
```

and add this field to your form:

```php
use CubeAgency\FilamentJson\Filament\Forms\Components\Json;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            Json::make('meta')
                ->schema([
                    Grid::make()
                        ->schema([
                            TextInput::make('title'),
                            TagsInput::make('keywords'),
                        ]),
                    Grid::make()
                        ->schema([
                            Textarea::make('description')
                                ->rows(3),
                            FileUpload::make('image')
                                ->image()
                                ->imagePreviewHeight('64')
                        ]),
                ]),
            // ...
        ]);
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dmitrijs Mihailovs](https://github.com/dmitrijs.mihailovs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
