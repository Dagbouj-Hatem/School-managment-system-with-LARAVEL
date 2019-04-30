@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Modifier un message</h2>
    <div class="blankpage-main">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($messageBook, ['route' => ['messageBooks.update', $messageBook->id], 'method' => 'patch']) !!}

                        @include('message_books.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection