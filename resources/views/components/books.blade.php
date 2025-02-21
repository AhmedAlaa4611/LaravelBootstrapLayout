@props(['books'])

<div class="row g-4">
    @foreach ($books as $book)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">{{ $book->title }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $book->price }}$</h5>
                    <p class="card-text">{{ $book->description }}</p>
                    <p class="card-text">Category: {{ $book->category->title }}</p>
                    <a href="{{ url('/students/books/'.$book->id) }}" class="btn btn-primary">Show</a>
                </div>
            </div>
        </div>
    @endforeach
</div>