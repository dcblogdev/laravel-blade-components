@props([
    'type' => 'text',
    'name' => '',
    'label' => '',
    'value' => '',
])

<div>
    <label for='{{ $name }}'>{{ $label }}</label>
    <input type='{{ $type }}' name='{{ $name }}' id='{{ $name }}' value='{{ $slot }}' {{ $attributes }}>
</div>