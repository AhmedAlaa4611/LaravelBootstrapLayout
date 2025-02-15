@props([
    'name',
    'value',
    'select' => null,
])

<div class="form-check">
    <input class="form-check-input" {{ $attributes }} name="{{ $name }}" value="{{ $value }}" id="{{ $value }}" @checked(old($name) == $value || $select)>
    <label class="form-check-label" for="{{ $value }}">{{ $slot }}</label>
</div>