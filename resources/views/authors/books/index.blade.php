<x-layout>
    <x-slot:heading>Books Listing</x-slot:heading>

    <x-table :collection="$books" :display="$display" table-name="books" />
</x-layout>