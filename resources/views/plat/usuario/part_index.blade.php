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
                <div class="pull-right">
                    
                    
                    <a class="btn btn-primary btn-xs" href="{{ route('edit_user_path', ['usuario' => $usuario]) }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <form class="btn-xs pull-right" method="POST" action="{{ route('delete_user_path',['usuario' => $usuario]) }}"> 
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </form>
                   
                </div>
            </td>
            @endif
            </tr>
        @endforeach
        </table>
        
</div>