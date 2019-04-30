<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    {!! Form::file('file') !!}
</div>

<!-- Matiere Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matiere_id', 'Matière:') !!}
    {!! Form::select('matiere_id', $matiers , null, ['class' => 'form-control']) !!}
</div>

<!-- Type Examen Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_examen_id', 'Type d\'examen:') !!}
    {!! Form::select('type_examen_id', $types , null, ['class' => 'form-control']) !!}
</div>

<!-- Classe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classe_id', 'Classe:') !!}
    {!! Form::select('classe_id', $classes , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('examens.index') !!}" class="btn btn-default">Annuler</a>
</div>
