{!! Form::open(['route' => ['examens.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
     @can('Consulter un examen')
    <a href="{{ route('examens.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
     @can('Modifier un examen')
    <a href="{{ route('examens.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
     @can('Supprimer un examen')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan
     @can('Consulter un message')
     <a href="{{ route('examenmessages',$id) }}" class="btn btn-primary"><i class="fa fa-comments fa-lg"></i> Commentaire</a>
     @endcan
</div>
{!! Form::close() !!}
