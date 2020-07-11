@props([
    'type' => 'submit'
])

<div>
    <button type="{{ $type }}" {{ $attributes }}>
        {{ $slot }}
    </button>
</div>