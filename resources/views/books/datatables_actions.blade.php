{!! Form::open(['route' => ['books.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('books.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    <a href="{{ route('books.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
     <a href="{{ route('bookmessages',$id) }}" class="btn btn-primary"><i class="fa fa-comments fa-lg"></i> Commentaire</a>
</div>
{!! Form::close() !!}
