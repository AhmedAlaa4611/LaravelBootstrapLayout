@props(['name'])

@error($name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror