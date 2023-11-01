<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Heater</th>
            <th scope="col">Waterpump</th>
            <th scope="col">Lampu</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->heater }}</td>
                <td>{{ $item->waterpump }}</td>
                <td>{{ $item->lampu }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $data->links() }}
