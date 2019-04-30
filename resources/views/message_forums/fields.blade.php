<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12"> 
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregister', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sujetForums.index') !!}" class="btn btn-default">Annuler</a>
</div>
