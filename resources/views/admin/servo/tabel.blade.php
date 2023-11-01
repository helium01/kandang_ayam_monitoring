<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Makan</th>
            <th>Minum</th>
        </tr>
    </thead>
    <tbody>
        <!-- Your PHP loop remains the same -->
        @foreach($data as $item)
        <tr>
            <td>{{ $item->created_at }}</td>
            <td>
                @if($loop->first)
                    @if($item->node1==1)
                        Makan terbuka
                    @else
                        Makan Tertutup
                    @endif
                    <form action="/api/servos/front" method="post">
                        @if($item->node1 == 1)
                        <input type="hidden" name="node1" value="0">
                        <input type="hidden" name="node2" value="{{$item->node2}}">
                            <button type="submit" class="btn btn-danger">Tutup</button>
                        @else
                        <input type="hidden" name="node1" value="1">
                        <input type="hidden" name="node2" value="{{$item->node2}}">
                            <button type="submit" class="btn btn-success">Buka</button>
                        @endif
                    </form>
                @else
                @if($item->node1==1)
                Makan terbuka
            @else
                Makan Tertutup
            @endif
                @endif
            </td>
            <td>
                @if($loop->first)
                @if($item->node2==1)
                Makan terbuka
            @else
                Makan Tertutup
            @endif
                    <form action="/api/servos/front" method="post">
                        @if($item->node2 == 1)
                        <input type="hidden" name="node1" value="{{$item->node1}}">
                        <input type="hidden" name="node2" value="0">
                            <button type="submit" class="btn btn-danger">Tutup</button>
                        @else
                        <input type="hidden" name="node1" value="{{$item->node1}}">
                        <input type="hidden" name="node2" value="1">
                            <button type="submit" class="btn btn-success">Buka</button>
                        @endif
                    </form>
                @else
                @if($item->node2==1)
                Makan terbuka
            @else
                Makan Tertutup
            @endif
                @endif
            </td>
           
        </tr>
    @endforeach
    </tbody>
    {{ $data->links() }}
</table>