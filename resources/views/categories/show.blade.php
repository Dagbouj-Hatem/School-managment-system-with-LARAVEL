@extends('layouts.app')

@section('content')

<div class="blank">
    <h2>Détails de la catégorie</h2> 
    <div class="blankpage-main">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('categories.show_fields')
                    <a href="{!! route('categories.index') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
