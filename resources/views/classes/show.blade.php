@extends('layouts.app')

@section('content')
<div class="blank">
    <h2>Détails de la classe</h2>
    <div class="blankpage-main">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('classes.show_fields')
                    <a href="{!! route('classes.index') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
