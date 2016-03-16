@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contactez-nous !</div>
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'contact.store',
                            'method' => 'POST'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Nom') !!}
                                {!! Form::text('name', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('message', 'Message') !!}
                                {!! Form::textarea('message', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                        
                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Envoyer le message',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}
                        <a class="btn btn-default" href="{{ route('post.index') }}">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection