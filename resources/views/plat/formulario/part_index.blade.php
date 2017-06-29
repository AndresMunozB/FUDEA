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

                    <a class="btn btn-primary btn-xs" href="{{ route('form_path', ['form' => $form]) }}">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>

                    <form class="btn-xs pull-right" method="POST" action="{{ route('home') }}"> 
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $form->id }}">
                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                    </form>
                   
                </div>
            </td>
        </tr>
    @endforeach
    
</div>