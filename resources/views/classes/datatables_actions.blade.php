{!! Form::open(['route' => ['classes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('Consulter une classe')
    <a href="{{ route('classes.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
    @can('Modifier une classe')
    <a href="{{ route('classes.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
    @can('Supprimer une classe')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endcan

    <a href="" class="btn btn-primary"><i class="fa fa-list"></i> Liste élèves</a>
</div>
{!! Form::close() !!}
