<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $messageForum->id !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $messageForum->content !!}</p>
</div>

<!-- Sujet Forums Id Field -->
<div class="form-group">
    {!! Form::label('sujet_forums_id', 'Sujet Forums Id:') !!}
    <p>{!! $messageForum->sujet_forums_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $messageForum->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $messageForum->updated_at !!}</p>
</div>

