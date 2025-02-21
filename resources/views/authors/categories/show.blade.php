<x-layout>
    <x-slot:heading>Show the Category</x-slot:heading>

    <div class="card mb-4 mx-auto" style="width: 18rem;">
        <div class="card-header">{{ $category->id }}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $category->title }}</h5>
            <a href="#" class="btn btn-primary">Show Books</a>
        </div>
    </div>
</x-layout>