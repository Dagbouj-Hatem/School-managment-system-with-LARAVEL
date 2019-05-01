{!! Form::open(['route' => ['matieres.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('Consulter une matière')
    <a href="{{ route('matieres.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
    @can('Modifier une matière')
    <a href="{{ route('matieres.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
    @can('Supprimer une matière')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
