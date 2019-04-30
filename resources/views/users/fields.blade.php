<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'Nom:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Prénom:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birthday', 'Date de naissance:') !!}
    {!! Form::date('date_of_birthday', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Téléphone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Avatar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avatar', 'Photo de profil:') !!}
    {!! Form::file('avatar') !!} 
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_account', 'Type de compte:') !!}
    {!! Form::select('type_account', $roles, null, ['class' => 'form-control']) !!}
</div>


<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'Ville:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', 'Code postal:') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Address1 Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('address1', 'Addresse complète 1:') !!}
    {!! Form::textarea('address1', null, ['class' => 'form-control']) !!}
</div>

<!-- Address2 Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('address2', 'Addresse complète 2:') !!}
    {!! Form::textarea('address2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Annuler</a>
</div>
