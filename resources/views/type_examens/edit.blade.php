@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Modifier un type d'examen</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeExamen, ['route' => ['typeExamens.update', $typeExamen->id], 'method' => 'patch']) !!}

                        @include('type_examens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection