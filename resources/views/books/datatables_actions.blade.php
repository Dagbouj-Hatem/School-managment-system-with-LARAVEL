{!! Form::open(['route' => ['books.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
     @can('Consulter un livre')
    <a href="{{ route('books.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
     @endcan
     @can('Modifier un livre')
    <a href="{{ route('books.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
     @endcan
     @can('Supprimer un livre')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
     @endcan
     @can('Consulter un message')
     <a href="{{ route('bookmessages',$id) }}" class="btn btn-primary"><i class="fa fa-comments fa-lg"></i> Commentaires</a>
     @endcan
</div>
{!! Form::close() !!}
