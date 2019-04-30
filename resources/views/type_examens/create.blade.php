@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Ajouter un type d'examen</h2>
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'typeExamens.store']) !!}

                        @include('type_examens.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
