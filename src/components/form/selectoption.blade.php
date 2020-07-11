@props([
    'key' => '',
    'value' => '', 
    'selectedValue' => ''
])

<option value="{{ $key }}" @if ($selectedValue == $key) selected="selected" @endif>{{ $value }}</option>