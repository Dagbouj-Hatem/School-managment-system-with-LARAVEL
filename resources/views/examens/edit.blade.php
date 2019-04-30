@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Modifier un examen</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($examen, ['route' => ['examens.update', $examen->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('examens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection