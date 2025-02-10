@props([
    'name',
    'value' => null,
])

{{-- we need to use @checked() @here@ --}}
<div class="form-check">
    <input class="form-check-input" {{ $attributes }} name="{{ $name }}" value="{{ old($name, $value) }}" id="{{ $value }}">
    <label class="form-check-label" for="{{ $value }}">{{ $slot }}</label>
</div>