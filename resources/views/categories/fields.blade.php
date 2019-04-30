<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Nom de catégorie:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Annuler</a>
</div>
