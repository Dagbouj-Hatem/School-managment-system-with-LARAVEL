@extends('layouts.app')

@section('content')
<div class="blank">
<h2>Modifier un niveau</h2> 
    <div class="blankpage-main"> 
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($level, ['route' => ['levels.update', $level->id], 'method' => 'patch']) !!}

                        @include('levels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection