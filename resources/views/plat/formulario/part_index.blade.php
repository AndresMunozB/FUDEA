<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th></th>

        </tr>
    @foreach($forms as $form)
        <tr>
            <td>{{ $form->rut }}</td>
            <td>{{ $form->name }}</td>
            <td>
                <div class="pull-right">
                    
                    
                    <a class="btn btn-primary btn-xs" href="{{ route('edit_form_path', ['form' => $form]) }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <a class="btn btn-success btn-xs" href="{{ route('agree_form_path', ['form' => $form]) }}">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </a>

                    <form class="btn-xs pull-right" method="POST" action="{{ route('delete_form_path',['form' => $form]) }}"> 
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </form>
                   
                </div>
            </td>
        </tr>
    @endforeach
    
</div>