{!! Form::open(['route' => ['sujetForums.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('Consulter un sujet')
    <a href="{{ route('sujetForums.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
    @can('Modifier un sujet')
    <a href="{{ route('sujetForums.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
    @can('Supprimer un sujet')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan
    @can('Consulter un message')
    <a href="{{ route('messages',$id) }}" class="btn btn-primary"><i class="fa fa-comment fa-lg"></i> Consulter</a>
    @endcan
</div>
{!! Form::close() !!}
