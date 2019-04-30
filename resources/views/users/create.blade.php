@extends('layouts.app')

@section('content')
<div class="blank"><!-- add class div -->
    <h2>Ajouter un utilisateur</h2>
    <section class="content-header">
        <h1>
            
        </h1>
    </section>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'users.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
