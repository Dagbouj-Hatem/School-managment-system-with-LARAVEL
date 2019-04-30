@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Modifier un sujet</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sujetForum, ['route' => ['sujetForums.update', $sujetForum->id], 'method' => 'patch']) !!}

                        @include('sujet_forums.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection