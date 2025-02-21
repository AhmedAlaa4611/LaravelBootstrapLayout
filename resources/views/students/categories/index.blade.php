<x-layout>
    <x-slot:heading>Categories Listing</x-slot:heading>

    <div class="row g-4">
        @foreach ($categories as $category)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{ $loop->iteration }}</div>
                    <div class="card-body">
                        <p class="card-text text-center">{{ $category->title }}</p>
                        <a href="{{ url('/students/categories/'.$category->id) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>