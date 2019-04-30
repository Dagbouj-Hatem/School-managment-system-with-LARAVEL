@extends('layouts.app')

@section('content')
<div class="blank">
    <h2>Modifier une classe</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classe, ['route' => ['classes.update', $classe->id], 'method' => 'patch']) !!}

                        @include('classes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection