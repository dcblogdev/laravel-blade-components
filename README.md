# Laravel Blade components collection

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dcblogdev/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-blade-components)
[![Total Downloads](https://img.shields.io/packagist/dt/dcblogdev/laravel-blade-components.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-blade-components)

Re-usable Laravel Blade components for your projects

## Installation

You can install the package via composer:

```bash
composer require dcblogdev/laravel-blade-components
```

## Usage 

## Form components

* [Open](#open)
* [Input](#form-input)
* [Textarea](#form-textarea)
* [Checkbox](#form-checkbox)
* [Radio](#form-radio)
* [Select](#form-select)
* [Button](#form-button)

All form components accept option paramters that such as class='' style=''

> When the method is set to PUT, PATCH or DELETE the @method() will be applied automatically.
### Open 

Defaults to post method and CSRF token

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

Set the input value

```php
<x-form.input name='username' label='Username'>{{ $username }}</x-form.input>
```

### Form textarea

```php
<x-form.textarea name='comments'></x-form.textarea>
```

Set the rows and columns

```php
<x-form.textarea name='comments' cols='10' rows='10'></x-form.textarea>
```

Set the textarea data

```php
<x-form.textarea name='comments' cols='10' rows='10'>{{ $comments }}</x-form.textarea>
```

### Form checkbox

A checkbox can also be defined, set the name and value

```php
<x-form.checkbox name='terms' value='1'></x-form.checkbox>
```

Check the checkbox by passing its value, as long its a match the checkbox will be checked.

```php
<x-form.checkbox name='terms' value='1'>1</x-form.checkbox>
```

or 

```php
<x-form.checkbox name='terms' value='1'>{{ $terms }}</x-form.checkbox>
```

### Form radio

A radio can also be defined, set the name, label and value

```php
<x-form.radio name='result' label='Won' value='Won'></x-form.radio>
<x-form.radio name='result' label='Lost' value='Lost'></x-form.radio>
<x-form.radio name='result' label='Draw' value='Draw'></x-form.radio>
```

Pass a value which will check the matching radio.

```php
<x-form.radio name='result' label='Won' value='Won'>{{ $result }}</x-form.radio>
<x-form.radio name='result' label='Lost' value='Lost'>{{ $result }}</x-form.radio>
<x-form.radio name='result' label='Draw' value='Draw'>{{ $result }}</x-form.radio>
```

Check the checkbox by passing its value, as long its a match the checkbox will be checked.

```php
<x-form.checkbox name='terms' value='1'>1</x-form.checkbox>
```

or 

```php
<x-form.checkbox name='terms' value='1'>{{ $terms }}</x-form.checkbox>
```

### Form select

create a select menu set the name and placeholder for the initial option 

```php
<x-form.select name='types' placeholder='Select'>

</x-form.select>
```

Leave off the placeholder to have only the select and options that can be selected

```php
<x-form.select name='types'>

</x-form.select>
```

In order to set the option an array is needed and is looped over and then a nested component is used.

Pass in the key and value from the array

```php
@php
$options = [1 => 'one', 2 => 'two', 3 => 'three'];
@endphp

<x-form.select name='types' placeholder='Select'>
    @foreach($options as $key => $value)
        <x-form.selectoption key='{{ $key }}' value='{{ $value }}'></x-form.selectoption>
    @endforeach
</x-form.select>
```

### Form button

Create a button, defaults to a submit type

```php
<x-form.button name='submit'>Submit</x-form.button>
```

Create a button, using only the defaults and a label

```php
<x-form.button>Submit</x-form.button>
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