@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')

            <div class="panel panel-default bloc-show">
            <div class="panel-heading">
                        <a href="{{ route('post.show', $post->id) }}">
                            @if($post->img == '1')
                                <img src="{{ asset("img/aide-menagere.png") }}" alt="" class="img-responsive image">
                            @elseif($post->img == '2')
                                <img src="{{ asset("img/jardinage.png") }}" alt="" class="img-responsive image">
                            @elseif($post->img == '3')
                                <img src="{{ asset("img/babysitting.png") }}" alt="" class="img-responsive image">
                            @elseif($post->img == '4')
                                <img src="{{ asset("img/aide-scolaire.png") }}" alt="" class="img-responsive image">
                            @elseif($post->img == '5')
                                <img src="{{ asset("img/informatique.png") }}" alt="" class="img-responsive image">
                            @elseif($post->img == '6')
                                <img src="{{ asset("img/bricolage.png") }}" alt="" class="img-responsive image">
                            @else
                                <img src="{{ asset("img/autres.png") }}" alt="" class="img-responsive image">
                            @endif
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
                </div>
                <div class="panel-bas">
                    <div class="row">
                    <div class="col-xs-4">
                        <span class="lieu"><b>{{ $post->lieu }}</b></span>
                    </div>
                    <div class="col-xs-4">
                        <span class="prix">
                        <b>@if($post->prix == '8')
                            <span class="prix">1€ - 10€</span>
                            @elseif($post->prix == '9')
                            <span class="prix">11€ - 20€</span>
                            @elseif($post->prix == '10')
                            <span class="prix">21€ - 30€</span>
                            @elseif($post->prix == '11')
                            <span class="prix">31€ - 40€</span>
                            @elseif($post->prix == '12')
                            <span class="prix">41€ - 50€</span>
                            @else
                            <span class="prix">+ 50€</span>
                            @endif</b>
                        </span>
                    </div>
                    <div class="col-xs-4">
                        <p class="tag">
                        <b>@if($post->img == '1')
                            #aideménagère
                            @elseif($post->img == '2')
                            #jardinage
                            @elseif($post->img == '3')
                            #babysitting
                            @elseif($post->img == '4')
                            #aidescolaire
                            @elseif($post->img == '5')
                            #informatique
                            @elseif($post->img == '6')
                            #bricolage
                            @else
                            #autre
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
                
                <div class="col-xs-12">
                <a class="btn btn-jsi" href="{{ route('message.creates', ['id' => $post->user_id]) }}">Je suis interessé !</a>
                </div>
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