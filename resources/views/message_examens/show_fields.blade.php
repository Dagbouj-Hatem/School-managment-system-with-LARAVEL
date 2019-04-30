<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $messageExamen->id !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $messageExamen->content !!}</p>
</div>

<!-- Examen Id Field -->
<div class="form-group">
    {!! Form::label('examen_id', 'Examen Id:') !!}
    <p>{!! $messageExamen->examen_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $messageExamen->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $messageExamen->updated_at !!}</p>
</div>

