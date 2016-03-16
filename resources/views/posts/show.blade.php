@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;" ><h3>{{ $post->title }}</h3>Créer le : {{ $post->created_at }}</div>

                <div class="panel-body">
                    {{ $post->content }}
                </div>

                <div class="panel-footer" style="text-align: center;">
                @if(Auth::check()
                && (Auth::user()->id == $post->user_id
                || Auth::user()->isAdmin))

                    {!! Form::model($post, array(
                        'route' => array('post.destroy', $post->id),
                        'method' => 'DELETE')) 
                    !!}

                    {!! Form::submit('Supprimer', ['class' => 'btn btn-default']) !!}

                    
                    
                
                    <a class="btn btn-default" href="{{ route('post.edit', $post->id) }}">Modifier l'article</a>
                
                @endif

                    <a class="btn btn-default" href="{{ route('post.index') }}">Retour aux articles</a>

                    {!! Form::close() !!}
                </div>
                <div class="panel-body">
                    <h3>Commentaires</h3>

                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'comment.store',
                            'method' => 'POST'
                            ))
                        !!}
                            {!! Form::hidden('post_id', $post->id, ['class'=>'form-control']) !!}

                            <div class="form-group">
                                {!! Form::label('Comment', 'Écrire un commentaire') !!}
                                {!! Form::textarea('comment', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                        
                        {!! Form::submit('Publier le commentaire',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}

                        <br>
                    </div>

                    @foreach($post->comments as $comment)
                        <p>
                            <strong>{{ $comment->user->name }}</strong>
                            <br>
                            {{ $comment->comment }}
                        </p>

                        @if(Auth::check()
                        && (Auth::user()->id == $comment->user_id
                        || Auth::user()->isAdmin))

                            {!! Form::model($comment, array(
                                'route' => array('comment.destroy', $comment->id),
                                'method' => 'DELETE')) 
                            !!}

                            {!! Form::submit('Supprimer', ['class' => 'btn btn-default']) !!}

                            
                            
                        
                            <a class="btn btn-default" href="{{ route('comment.edit', $comment->id) }}">Modifier le commentaire</a>
                        
                        @endif

                        {!! Form::close() !!}

                        <br>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection