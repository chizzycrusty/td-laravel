@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')

            <div class="panel panel-default bloc-show">
            <div class="panel-heading">
                        <a href="{{ route('post.show', $post->id) }}">
                            <img src="{{ asset($post->img) }}" alt="" class="img-responsive image">
                        </a>
                    </div>

                <div class="panel-header">
                        <a class="titre" href="{{ route('post.show', $post->id) }}"><b>{{ $post->title }}</b></a>
                        <br>
                        <p class="date">{{ $post->created_at }}</p>
                        <hr>
                </div>
                <div class="panel-body">
                    <p class="descri">{{ $post->content }}</p>
                    <address>
                    {{ $post->adresse }}, {{ $post->postal }} {{ $post->lieu}}
                    </address>
                </div>
                <div class="panel-bas">
                    <div class="row">
                    <div class="col-xs-4">
                        <span class="lieu"><b>{{ $post->lieu }}</b></span>
                    </div>
                    <div class="col-xs-4">
                        
                    </div>
                    <div class="col-xs-4">
                        <p class="tag">
                        <b>@if($post->type == '1')
                            #Français
                            @elseif($post->type == '2')
                            #Chinois
                            @elseif($post->type == '3')
                            #Japonais
                            @elseif($post->type == '4')
                            #Italien
                            @elseif($post->type == '5')
                            #Américain
                            @elseif($post->type == '6')
                            #Libanais
                            @else
                            #Autre
                            @endif</b>
                        </p>
                        </div>
                @if(Auth::check()
                && (Auth::user()->id == $post->user_id
                || Auth::user()->isAdmin))
                <div class="col-xs-6">
                    <a class="btn btn-default btn-modifier" href="{{ route('post.edit', $post->id) }}">Modifier</a>
                </div>
                <div class="col-xs-6">
                    {!! Form::model($post, array(
                        'route' => array('post.destroy', $post->id),
                        'method' => 'DELETE')) 
                    !!}

                    {!! Form::submit('Supprimer', ['class' => 'btn btn-default btn-supprimer']) !!}
                </div>
                
                @endif
                

                    </div>
                    </div> 


                    {!! Form::close() !!}
                </div>
                <div class="panel-footer">
                    <h2>Commentaires :</h2>
                                        @if(Auth::check())
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'comment.store',
                            'method' => 'POST'
                            ))
                        !!}
                            {!! Form::hidden('post_id', $post->id, ['class'=>'form-control']) !!}

                            <div class="form-group">
                                {!! Form::label('Comment', 'Écrire un commentaire',
                                    ['class' => 'label'])
                                !!}
                                {!! Form::textarea('comment', '', 
                                    ['class' => 'form-control form-comment']) 
                                !!}
                            </div>
                        
                        {!! Form::submit('Publier le commentaire',
                            ['class' => 'btn btn-publier'])
                        !!}

                        {!! Form::close() !!}

                        <br>
                    </div>
                                        @endif


                    @foreach($post->comments as $comment)
                    <hr>
                        <p> 
                            <div class="row">
                            <div class="col-xs-6">
                            <strong class="name-comment"><b>{{ $comment->user->name }} :</b></strong>
                            </div>
                            <div class="col-xs-6">
                            <strong class="date-comment">{{ $comment->created_at }}</strong>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12">
                            <p class="comment-comment">{{ $comment->comment }}</p>
                            </div>
                            </div>
                        </p>
                        @if(Auth::check()
                        && (Auth::user()->id == $comment->user_id
                        || Auth::user()->isAdmin))

                            {!! Form::model($comment, array(
                                'route' => array('comment.destroy', $comment->id),
                                'method' => 'DELETE')) 
                            !!}

                            <a class="btn btn-default btn-modif" href="{{ route('comment.edit', $comment->id) }}">Modifier</a>
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-default btn-sup']) !!}


                            
                            
                        
                        
                        @endif

                        {!! Form::close() !!}
                        
                        <br>

                    @endforeach

                </div>
            </div>
    </div>
</div>
@endsection