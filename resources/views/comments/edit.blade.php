@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        </div>
        @endif
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editer un commentaire</div>
                    <div class="panel-body">

                    @if(Auth::check()
                    && (Auth::user()->id == $comment->user_id
                    || Auth::user()->isAdmin))

                        {!! Form::model($comment,
                            array(
                            'route' => array('comment.update', $comment->id),
                            'method' => 'PUT'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('Comment', 'Modifier un commentaire') !!}
                                {!! Form::textarea('comment', old('comment'), 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                        
                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Publier le commentaire',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}

                        @else
                        
                        <p>Vous n'avez pas les droits nécessaires</p>

                        @endif

                        <a class="btn btn-default" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection