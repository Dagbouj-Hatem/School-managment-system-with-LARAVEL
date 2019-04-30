@extends('layouts.app')

@section('content')
<div class="blank">
<h2>Les informations d'un niveau</h2> 
    <div class="blankpage-main"> 
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('levels.show_fields')
                    <a href="{!! route('levels.index') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
