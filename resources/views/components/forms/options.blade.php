@props(['name', 'collection'])

<div class="col-md-6">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        <option selected disabled value="">{{ $slot }}</option>
        @foreach ($collection as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
    <x-forms.error :name="$name" />
</div>