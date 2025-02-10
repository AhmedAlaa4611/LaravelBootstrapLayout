<x-layout>
    <x-slot:heading>Other Components</x-slot:heading>

    <x-forms action="/register" enctype="multipart/form-data">
        <x-forms.input type="file" name="image">Your image</x-forms.input>

        <x-forms.options name="state" :collection="$options">State</x-forms.options>

        <x-forms.dropdown name="state" :collection="$options" type="radio">State</x-forms.dropdown>

        <x-forms.textarea name="description">Description OR Comment</x-forms.textarea>

        <x-forms.submit>Other Components</x-forms.submit>
    </x-forms>

    <div class="text-center my-4">
        <x-buttons.update url="/update-url/edit" />
        <x-buttons.delete url="/delete-url" />
    </div>

    <x-table :collection="$users" :display="$display" table-name="users" />
</x-layout>