{!! Form::open(['route' => ['categoryForums.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
     @can('Consulter une catégorie de sujet')
    <a href="{{ route('categoryForums.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
     @can('Modifier une catégorie de sujet')
    <a href="{{ route('categoryForums.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
     @can('Supprimer une catégorie de sujet')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
