<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Identifiant:') !!}
    <p>{!! $examen->id !!}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date d\'examen:') !!} 
    <p>{!! $examen->date !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    <p>{!! $examen->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $examen->description !!}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    <a href="{!! $examen->file !!}" class="btn btn-primary">Télécharger l'examen</a> 
</div>

<!-- Matiere Id Field -->
<div class="form-group">
    {!! Form::label('matiere_id', 'Matière:') !!}<br>
    <p>{!! $examen->matiere->name !!}</p>
</div>

<!-- Type Examen Id Field -->
<div class="form-group">
    {!! Form::label('type_examen_id', 'Type d\'examen:') !!}
    <p>{!! $examen->typeExamen->name !!}</p>
</div>

<!-- Classe Id Field -->
<div class="form-group">
    {!! Form::label('classe_id', 'Classe:') !!}
    <p>{!! $examen->classe->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Crée le:') !!}
    <p>{!! $examen->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Dernière mise à jour à:') !!}
    <p>{!! $examen->updated_at !!}</p>
</div>

