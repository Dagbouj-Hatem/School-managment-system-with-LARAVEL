<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Level ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Niveau :') !!}
    {!! Form::select('level_id', $levels , null, ['class' => 'form-control']) !!}
</div> 

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('classes.index') !!}" class="btn btn-default">Annuler</a>
</div>
