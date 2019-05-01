@extends('layouts.app')

@section('content')
<div class="blank"><!-- add class div -->
 
        <h2>
            Mettre à jour mon profil 
        </h2>
  
   <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['settings_save', $user->id], 'method' => 'patch' , 'enctype' => 'multipart/form-data']) !!}

                        <!-- First Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('first_name', 'Nom:') !!}
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        </div>
                        <input type="hidden" name="type_account" value="{{ Auth::user()->type_account }}">

                        <!-- Last Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('last_name', 'Prénom:') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Date Of Birthday Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('date_of_birthday', 'Date de naissance:') !!}
                            {!! Form::date('date_of_birthday', $user->date_of_birthday, ['class' => 'form-control']) !!}
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
                        <div class="form-group col-sm-12">
                            {!! Form::label('password', 'Mot de passe:') !!}
                            {!! Form::text('password', '', ['class' => 'form-control']) !!}
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
                        </div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>

</div>
@endsection