@extends('layouts.app')

@section('content')
<div class="blank">
    <h2>Ajouter un nouveau livre</h2> 
    <div class="blankpage-main">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'books.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('books.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
