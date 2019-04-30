<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Forums Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_forums_id', 'Catégorie:') !!}
    {!! Form::select('category_forums_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sujetForums.index') !!}" class="btn btn-default">Annuler</a>
</div>
