@props(['collection', 'display', 'tableName'])

<div class="mb-2">
    <x-buttons.primary :url="'/'.Str::kebab($tableName).'/create'">Add New One</x-buttons.primary>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                @foreach ($display as $item)
                    <th scope="col" class="text-capitalize">{{ str_replace('_', ' ', $item) }}</th>
                @endforeach
                <th scope="col" class="text-capitalize">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item1)
                <tr>
                    @foreach ($display as $item2)
                        <td>{{ $item1->$item2 }}</td>
                    @endforeach
                    <td>
                        @php
                            $link = '/'.Str::kebab($tableName).'/'.$item1->id;
                        @endphp
                        <x-buttons.primary :url="$link">Show</x-buttons.primary>
                        <x-buttons.update :url="$link.'/edit'" />
                        <x-buttons.delete :url="$link" />
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="{{ count($display) + 1 }}">The number of {{ str_replace('_', ' ', $tableName) }} is: {{ count($collection) }}</td>
            </tr>
        </tfoot>
    </table>
</div>