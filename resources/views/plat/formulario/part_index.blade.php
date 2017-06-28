<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th></th>

        </tr>
    @foreach($forms as $form)
        <tr>
            <td>{{ $form->rut }}</td>
            <td>{{ $form->name }}</td>
            <td> tipo </td>
            <td>
                <div class="pull-right">
                    
                    
                    <a class="btn btn-primary btn-xs" href="{{ route('form_path', ['form' => $form]) }}">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                   
                </div>
            </td>
        </tr>
    @endforeach
    
</div>