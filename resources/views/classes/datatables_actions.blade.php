{!! Form::open(['route' => ['classes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('classes.show', $id) }}" class='btn btn-info'>
        <i class="fa fa-eye fa-lg"></i>
    </a>
    <a href="{{ route('classes.edit', $id) }}" class='btn btn-warning'>
        <i class="fa fa-edit fa-lg"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash fa-lg"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}

    <a href="" class="btn btn-primary"><i class="fa fa-list"></i> Liste élèves</a>
</div>
{!! Form::close() !!}
