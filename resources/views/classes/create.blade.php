@extends('layouts.app')

@section('content')
<div class="blank">
    <h2>Ajouter une classe</h2>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'classes.store']) !!}

                        @include('classes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
