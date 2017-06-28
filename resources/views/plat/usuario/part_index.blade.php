<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            @if(Auth::check())
            <th></th>
            @endif
        </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->rut }}</td>
            <td>{{ $usuario->name }}</td>
            @if(Auth::check())
            <td>
                
                </td>
                @endif
            </tr>
        @endforeach
        </table>
        
</div>