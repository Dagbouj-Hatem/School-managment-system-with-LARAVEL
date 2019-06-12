{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('Consulter un utilisateur')
    <a href="{{ route('users.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    @endcan
    @can('Modifier un utilisateur')
    <a href="{{ route('users.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    @endcan
    @can('Supprimer un utilisateur')
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
    ]) !!}
    @endcan

    @include('users.user_permission')
    
</div>
{!! Form::close() !!}
   