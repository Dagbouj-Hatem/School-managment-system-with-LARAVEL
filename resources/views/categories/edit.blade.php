@extends('layouts.app')

@section('content')
<div class="blank">
    <h2>Modifier une catégorie</h2> 
   <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categorie, ['route' => ['categories.update', $categorie->id], 'method' => 'patch']) !!}

                        @include('categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection