<x-forms action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}">
    <x-forms.input type="text" name="title" value="{{ $category->title ?? null }}">Title</x-forms.input>

    @isset($category)
        @method('PUT')
    @endisset

    <x-forms.submit>{{ isset($category) ? 'Update' : 'Create' }}</x-forms.submit>
</x-forms>