# Code editor for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sebastiaankloos/filament-code-editor.svg?style=flat-square)](https://packagist.org/packages/sebastiaankloos/filament-code-editor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sebastiaankloos/filament-code-editor/run-tests?label=tests)](https://github.com/sebastiaankloos/filament-codee-ditor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sebastiaankloos/filament-codee-ditor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sebastiaankloos/filament-code-editor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sebastiaankloos/filament-code-editor.svg?style=flat-square)](https://packagist.org/packages/sebastiaankloos/filament-code-editor)

This package provides a code editor form field type for Filament. It's based on CodeMirror 6.

## Installation

You can install the package via composer:

```bash
composer require sebastiaankloos/filament-code-editor
```

## Usage

```php
use SebastiaanKloos\FilamentCodeEditor\Components\CodeEditor;

CodeEditor::make('custom_css'),
```

If you are using this package without Filament Admin, you should add the JS file manually.
Either via `require`
```js
// You can add this to your app.js file
require('../../vendor/sebastiaankloos/filament-code-editor/dist/filament-tools');
```
or as `import` statement:
```js
import CodeEditorAlpinePlugin from '../../vendor/sebastiaankloos/filament-code-editor/dist/module.esm';
Alpine.plugin(CodeEditorAlpinePlugin);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sebastiaan Kloos](https://github.com/SebastiaanKloos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
