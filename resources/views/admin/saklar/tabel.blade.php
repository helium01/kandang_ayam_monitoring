<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Heater</th>
            <th>Waterpump</th>
            <th>Lampu</th>
        </tr>
    </thead>
    <tbody>
        <!-- Your PHP loop remains the same -->
        @foreach($data as $item)
        <tr>
            <td>{{ $item->created_at }}</td>
            <td>
                @if($loop->first)
                    @if($item->heater==1)
                        Hidup
                    @else
                        Mati
                    @endif
                    <form action="/api/saklars/front" method="post">
                        @if($item->heater == 1)
                        <input type="hidden" name="heater" value="0">
                        <input type="hidden" name="waterpump" value="{{$item->waterpump}}">
                        <input type="hidden" name="lampu" value="{{$item->lampu}}">
                            <button type="submit" class="btn btn-danger">Matikan</button>
                        @else
                        <input type="hidden" name="heater" value="1">
                        <input type="hidden" name="waterpump" value="{{$item->waterpump}}">
                        <input type="hidden" name="lampu" value="{{$item->lampu}}">
                            <button type="submit" class="btn btn-success">Hidupkan</button>
                        @endif
                    </form>
                @else
                @if($item->heater==1)
                Hidup
            @else
                Mati
            @endif
                @endif
            </td>
            <td>
                @if($loop->first)
                @if($item->waterpump==1)
                Hidup
            @else
                Mati
            @endif
                    <form action="/api/saklars/front" method="post">
                        @if($item->waterpump == 1)
                        <input type="hidden" name="heater" value="{{$item->heater}}">
                        <input type="hidden" name="waterpump" value="0">
                        <input type="hidden" name="lampu" value="{{$item->lampu}}">
                            <button type="submit" class="btn btn-danger">Matikan</button>
                        @else
                        <input type="hidden" name="heater" value="{{$item->heater}}">
                        <input type="hidden" name="waterpump" value="1">
                        <input type="hidden" name="lampu" value="{{$item->lampu}}">
                            <button type="submit" class="btn btn-success">Hidupkan</button>
                        @endif
                    </form>
                @else
                @if($item->waterpump==1)
                Hidup
            @else
                Mati
            @endif
                @endif
            </td>
            <td>
                @if($loop->first)
                @if($item->lampu==1)
                Hidup
            @else
                Mati
            @endif
                    <form action="/api/saklars/front" method="post">
                        @if($item->lampu == 1)
                        <input type="hidden" name="heater" value="{{$item->heater}}">
                        <input type="hidden" name="waterpump" value="{{$item->waterpump}}">
                        <input type="hidden" name="lampu" value="0">
                            <button type="submit" class="btn btn-danger">Matikan</button>
                        @else
                        <input type="hidden" name="heater" value="{{$item->heater}}">
                        <input type="hidden" name="waterpump" value="{{$item->waterpump}}">
                        <input type="hidden" name="lampu" value="1">
                            <button type="submit" class="btn btn-success">Hidupkan</button>
                        @endif
                    </form>
                @else
                @if($item->lampu==1)
                Hidup
            @else
                Mati
            @endif
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
    {{ $data->links() }}
</table>