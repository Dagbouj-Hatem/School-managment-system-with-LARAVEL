<div class="col-3">
    <!-- Avatar Field -->
    <div class="form-group"> 
        <img src="{!! $user->avatar !!}" >
    </div>
</div>

<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Identifiant:') !!} 
    <p>{!! $user->id !!}</p>
</div>

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'Nom:') !!}
    <p>{!! $user->first_name !!}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Prénom:') !!}
    <p>{!! $user->last_name !!}</p>
</div>

<!-- Date Of Birthday Field -->
<div class="form-group">
    {!! Form::label('date_of_birthday', 'Date de naissance:') !!}
    <p>{{ substr($user->date_of_birthday,0, 10)}}</p>
</div>

<!-- Address1 Field -->
<div class="form-group">
    {!! Form::label('address1', 'Addresse 1:') !!}
    <p>{!! $user->address1 !!}</p>
</div>

<!-- Address2 Field -->
<div class="form-group">
    {!! Form::label('address2', 'Addresse 2:') !!}
    <p>{!! $user->address2 !!}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'Ville :') !!}
    <p>{!! $user->city !!}</p>
</div>

<!-- Zipcode Field -->
<div class="form-group">
    {!! Form::label('zipcode', 'Code postal:') !!}
    <p>{!! $user->zipcode !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Téléphone:') !!}
    <p>{!! $user->phone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Type Account Field -->
<div class="form-group">
    {!! Form::label('type_account', 'Type de compte:') !!}
    <p>{{ $user->getRoleNames()[0] }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Membre depuis:') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Mis à jour à:') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

