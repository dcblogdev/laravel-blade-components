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

</x-form.open>
```

The method and actions can be passed:

``` php
<x-form.open method='delete' action='delete-comment'>

</x-form.open>
```

### Form input

Create an input with a name, the name will be used as the label as long as the label is not provided.

```php
<x-form.input name='username'></x-form.input>
```

Outputs:

```HTML
<div>
    <label for='username'>Username</label>
    <input type='text' name='username' id='username' value=''>
</div> 
```

Use a label

```php
<x-form.input name='username' label='Username'></x-form.input>
```

Use an id and a class

```php
<x-form.input name='username' label='Username' id='username' class='form-input'></x-form.input>
```

The type is set to test by default, it can be changed

```php
<x-form.input name='password' type='password'></x-form.input>
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