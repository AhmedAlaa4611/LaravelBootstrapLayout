@props([
    'name',
    'value' => null,
])

<div class="col-md-12">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" {{ $attributes }} rows="10" class="form-control @error($name) is-invalid @enderror">{{ old($name, $value) }}</textarea>
    <x-forms.error :name="$name" />
</div>