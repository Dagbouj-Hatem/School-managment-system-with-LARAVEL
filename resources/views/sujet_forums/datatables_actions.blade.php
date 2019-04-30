{!! Form::open(['route' => ['sujetForums.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('sujetForums.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    <a href="{{ route('sujetForums.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}

    <a href="{{ route('messages',$id) }}" class="btn btn-primary"><i class="fa fa-comment fa-lg"></i> Consulter</a>
</div>
{!! Form::close() !!}
