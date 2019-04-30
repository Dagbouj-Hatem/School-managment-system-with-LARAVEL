@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Gestion des autorisations</h2>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'permissions.store']) !!}

                        @include('permissions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
