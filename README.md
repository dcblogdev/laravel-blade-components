# Laravel Blade components collection

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dcblogdev/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-blade-components)
[![Build Status](https://img.shields.io/travis/dcblogdev/laravel-blade-components/master.svg?style=flat-square)](https://travis-ci.org/dcblogdev/laravel-blade-components)
[![Quality Score](https://img.shields.io/scrutinizer/g/dcblogdev/laravel-blade-components.svg?style=flat-square)](https://scrutinizer-ci.com/g/dcblogdev/laravel-blade-components)
[![Total Downloads](https://img.shields.io/packagist/dt/dcblogdev/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-blade-components)

Re-usable Laravel Blade components for your projects

## Installation

You can install the package via composer:

```bash
composer require dcblogdev/laravel-blade-components
```

## Usage 

## Form components

All form components accept option paramters that such as class='' style=''

> When the method is set to PUT, PATCH or DELETE the @method() will be applied automatically.
### Open a form, defaults to post method and CSRF token
``` php
<x-form.open>
```

The method and actions can be passed:

``` php
<x-form.open method='delete' action='delete-comment'>
```



### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dave@dcblog.dev instead of using the issue tracker.

## Credits

- [David Carr](https://github.com/dcblogdev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.