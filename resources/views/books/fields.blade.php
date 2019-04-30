<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie ID Field -->
<div class="form-group col-sm-4">
    {!! Form::label('categorie_id', 'Categorie :') !!}
    {!! Form::select('categorie_id', $categories , null, ['class' => 'form-control']) !!}
</div>

<!-- Level ID Field -->
<div class="form-group col-sm-4">
    {!! Form::label('level_id', 'Niveau :') !!}
    {!! Form::select('level_id', $levels , null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'Fichier:') !!}
    {!! Form::file('file') !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>



<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('books.index') !!}" class="btn btn-default">Annuler</a>
</div>
