# Nova Input Group

A Laravel Nova text field formatted as input group

[![Latest Version on Packagist](https://img.shields.io/packagist/v/decency/nova-input-group.svg?style=flat-square)](https://packagist.org/packages/decency/nova-input-group)

## Installation

```bash
composer require decency/nova-input-group
```

## Usage

Import it in your resources and add the InputGroup to `fields` method.

```php
use Decency\InputGroup\InputGroup;

public function fields(Request $request)
{
    return [
        ID::make('ID', 'id')->sortable(),
        Text::make('Name', 'name'),

        InputGroup::make('Subdomain', 'subdomain')
           ->position('after')
           ->text('@example.com'),

    ];
}
```

### Methods

This custom field has only two method:

* `position('')` You can choose between 'before' and 'after'. When not used, 'before' is used.
* `text('')` The text to be displayed.

## TODO List

* Allow to choose the size of the field.
* Also implement other field types.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

### Security

If you discover any security related issues, please email tim@decency.be instead of using the issue tracker.

## Credits

- [Tim Diels](https://github.com/timdiels1)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
