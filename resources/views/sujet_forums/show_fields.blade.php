<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Identifiant:') !!}
    <p>{!! $sujetForum->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    <p>{!! $sujetForum->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $sujetForum->description !!}</p>
</div>

<!-- Category Forums Id Field -->
<div class="form-group">
    {!! Form::label('category_forums_id', 'Catégorie:') !!}
    <p>{!! $sujetForum->categorie->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé le:') !!}
    <p>{!! $sujetForum->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Dernière modification le:') !!}
    <p>{!! $sujetForum->updated_at !!}</p>
</div>

