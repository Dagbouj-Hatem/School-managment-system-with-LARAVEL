@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Modifier une matière</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($matiere, ['route' => ['matieres.update', $matiere->id], 'method' => 'patch']) !!}

                        @include('matieres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection