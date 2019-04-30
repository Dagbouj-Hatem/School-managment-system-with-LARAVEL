@extends('layouts.app')

@section('content')
<div class="blank"><!-- add class div -->
    <h2>Gestion des utilisateurs</h2>
    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}"><i class="fa fa-user-plus"></i> Ajouter un utilisateur</a>
        </h1>
    </section>
    <div class="blankpage-main"><!-- add class blankpage-main-->
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('users.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

</div>    
@endsection

