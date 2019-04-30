@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>{{ $book->name }}</h2>
    <div class="blankpage-main">
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    @foreach($book->messages as $msg)    
                        <article class="row" style="margin:10px 0px;">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                          <figure class="thumbnail">
                             @if($msg->user->avatar)
                             <img class="img-responsive" src="{{ Auth::user()->avatar }}" alt="User profile picture" width="308" height="308">
                            @else
                            <img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
                            @endif
                            <figcaption class="text-center">{{ $msg->user->first_name }}</figcaption>
                          </figure>
                        </div>
                        <div class="col-md-10 col-sm-10">
                          <div class="panel panel-default arrow left">
                            <div class="panel-body">
                              <header class="text-left">
                                <div class="comment-user"><i class="fa fa-user"></i> {{ $msg->user->first_name.' '. $msg->user->last_name }}</div>
                                <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> {{ $msg->created_at->diffForHumans() }}</time>
                              </header>
                              <div class="comment-post">
                                <p>
                                  {{ $msg->content }}
                                </p>
                              </div>
                              {!! Form::open(['route' => ['messageBooks.destroy', $msg->id], 'method' => 'delete']) !!} 
                                <p class="text-right interaction">
                                <!-- Like section -->
                                @if(!$msg->liked())
                                <a href="{{ route('like.book.message',$msg->id) }}" class="btn btn-primary btn-sm like"><i class="fa fa-thumbs-up fa-lg"></i> J'aime <span class="badge badge-info">{{ $msg->likeCount }}</span></a>
                                @else
                                <a href="{{ route('dislike.book.message',$msg->id) }}" class="btn btn-primary btn-sm like"><i class="fa fa-thumbs-down fa-lg"></i> Je n'aime pas ça <span class="badge badge-info">{{ $msg->likeCount }}</span></a>
                                @endif
                                <!-- end Like section -->
                                @if($msg->user->id == Auth::user()->id)
                                <a href="{{ route('messageBooks.edit', $msg->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-lg"></i> Modifier</a>
                                @endif
                                    
                                    {!! Form::button('<i class="fa fa-trash fa-lg"></i> Supprimer', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-sm',
                                        'onclick' => "return confirm('Êtes-vous sûr de continuer la suppression?')"
                                    ]) !!}
                                 
                                   
                                </p>
                                {!! Form::close() !!}  
                            </div>
                          </div>
                        </div>
                      </article>   
                    @endforeach
                </div>
                <div class="row">
                         @include('flash::message')
                         @include('adminlte-templates::common.errors')
                </div>
                <div class="row">
                    {!! Form::open(['route' => 'messageBooks.store']) !!}

                       <!-- Content Field -->
                        <div class="form-group col-sm-12 col-lg-12"> 
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- ID book  & ID USER-->
                        <input type="hidden" name="book_id" value="{{ $book->id}}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <!-- ID Book  & ID user -->
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12 fill-right">
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary btn-block']) !!} 
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
