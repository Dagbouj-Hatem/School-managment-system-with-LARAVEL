@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Gestion des examens</h2>
    <section class="content-header"> 
        <h1 class="pull-right">
            @can('Ajouter un examen')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('examens.create') !!}"><i class="fa fa-plus-circle"></i> Ajouter un examen</a> @endcan
        </h1>
    </section>
    <div class="blankpage-main">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('examens.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
</div>
@endsection

