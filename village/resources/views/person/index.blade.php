<table>
    <tr><th>id</th><th>population</th></tr>
    @foreach ($items as $item)
        <tr>
        <td>{{$item->ken}}</td>
        <td>{{$item->population}}</td>
        </tr>
    @endforeach
</table>

@php
    // var_dump($items);
@endphp