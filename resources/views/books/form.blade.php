<x-forms action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" enctype="multipart/form-data">
    <x-forms.input type="text" name="title" value="{{ $book->title ?? null }}">Title</x-forms.input>

    <x-forms.input type="text" name="price" value="{{ $book->price ?? null }}">price</x-forms.input>

    <x-forms.textarea name="description" value="{{ $book->description ?? null }}">Description</x-forms.textarea>

    <x-forms.input type="file" name="image">Book image</x-forms.input>

    @isset($book)
        <div class="mt-5" style="width: 18rem;">
            <img src="{{ asset($book->image) }}" class="card-img-top" alt="Book Image: {{ $book->title }}">
        </div>
    @endisset

    @isset($book)
        @method('PUT')
    @endisset

    <x-forms.submit>{{ isset($book) ? 'Update' : 'Create' }}</x-forms.submit>
</x-forms>