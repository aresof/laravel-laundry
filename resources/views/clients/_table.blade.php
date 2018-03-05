<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>NIF</th>
        <th>Teléfono1</th>
        <th>-</th>
    </tr>
    <tr>
        <form action="{{ route('clients.search') }}" method="get">
        <th><input type="text" class="form-control" placeholder="Buscar por Nombre" name="name"></th>
        <th><input type="text" class="form-control" placeholder="Buscar por NIF" name="nif"></th>
        <th><input type="text" class="form-control" placeholder="Buscar por Teléfono" name="phone"></th>
        <th><input type="submit" value="Buscar"></th>
        </form>
    </tr>
    </thead>
    <tbody>
    @each('clients._list_item', $clients, 'client', 'clients._list_item_empty')
    </tbody>
</table>