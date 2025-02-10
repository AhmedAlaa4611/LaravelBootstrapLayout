<x-layout>
    <x-slot:heading>Show the Book</x-slot:heading>

    <div class="card mb-4 mx-auto" style="width: 18rem;">
        <div class="card-header">{{ $book->title }}</div>
        <img src="{{ asset($book->image) }}" class="card-img-top" alt="Book Image: {{ $book->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $book->price }}$</h5>
            <p class="card-text">{{ $book->description }}</p>
            <a href="#" class="btn btn-primary">Add to card</a>
        </div>
    </div>
</x-layout>