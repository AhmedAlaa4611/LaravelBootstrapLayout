<x-layout>
    <x-slot:heading>Categories Listing</x-slot:heading>

    <x-table :collection="$categories" :display="$display" table-name="categories" />
</x-layout>