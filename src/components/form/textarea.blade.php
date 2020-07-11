@props([
    'name'  => '',
    'label' => '',
    'value' => ''
])

@if ($label === '')
    @php
        //remove underscores from name
        $label = str_replace('_', ' ', $name);
        //detect subsequent letters starting with a capital 
        $label = preg_split('/(?=[A-Z])/', $label);
        //display capital words with a space
        $label = implode(' ', $label);
        //uppercase first letter and lower the rest of a word
        $label = ucwords(strtolower($label));
    @endphp
@endif

<div>
    <label for='{{ $name }}'>{{ $label }}</label>
    <textarea name='{{ $name }}' id='{{ $name }}' {{ $attributes }}>{{ $slot }}</textarea>
</div>