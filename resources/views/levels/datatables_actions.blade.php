{!! Form::open(['route' => ['levels.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('Consulter un niveau')
    <a href="{{ route('levels.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
    @can('Modifier un niveau')
    <a href="{{ route('levels.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
    @can('Supprimer un niveau')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
