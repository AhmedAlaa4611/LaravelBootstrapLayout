@props([
    'name',
    'value' => null,
])

<div class="col-md-6">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <input {{ $attributes }} name="{{ $name }}" value="{{ old($name, $value) }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}">
    <x-forms.error :name="$name" />
</div>