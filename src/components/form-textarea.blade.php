@props([
    'name'  => '',
    'label' => '',
    'value' => ''
])

<div>
    <label for='{{ $name }}'>{{ $label }}</label>
    <textarea name='{{ $name }}' id='{{ $name }}' {{ $attributes }}>{{ $slot }}</textarea>
</div>