@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Ajouter un sujet</h2>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'sujetForums.store']) !!}

                        @include('sujet_forums.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
