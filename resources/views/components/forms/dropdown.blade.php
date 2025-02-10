@props(['name', 'collection', 'type']) {{-- type => radio or checkbox --}}

<div class="dropdown-center col-md-6">
    <button class="dropdown-toggle form-control @error($name) is-invalid @enderror" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        {{ $slot }}
    </button>
    <div class="dropdown-menu px-2" style="width: 95%">
        <ul class="list-group">
            @foreach ($collection as $item)
                <li class="list-group-item list-group-item-action">
                    <x-forms.check type="{{ $type }}" name="{{ $name }}" value="{{ $item }}">{{ $item }}</x-forms.check>
                </li>
            @endforeach
        </ul>
    </div>
    <x-forms.error :name="$name" />
</div>