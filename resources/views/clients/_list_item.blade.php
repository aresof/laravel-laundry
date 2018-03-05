<tr>
    <td>{{$client->name}}</td>
    <td>{{$client->nif}}</td>
    <td>{{$client->phone1}}</td>
    <td><a href="{{route('clients.show',[$client->id])}}">Ver</a></td>
</tr>