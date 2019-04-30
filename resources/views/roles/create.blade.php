@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Ajouter un rôle</h2>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'roles.store']) !!}

                        @include('roles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
