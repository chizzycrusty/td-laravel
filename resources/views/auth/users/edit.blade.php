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
                <div class="panel panel-default">
                                    <div class="panel-body">


                            {!! Form::model($user,
                                array(
                                'route' => array('user.update', $user->id),
                                'method' => 'PUT'
                                ))
                            !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Nom') !!}
                                {!! Form::text('name', old('Nom'),
                                    ['class' => 'form-control',
                                    'placeholder' => 'Nom'
                                    ])
                                !!}
                            </div>

                        <div class="form-group">
                            {!! Form::label('email', 'E-mail') !!}
                            {!! Form::email('email', old('E-mail'),
                                ['class' => 'form-control',
                                'placeholder' => 'E-mail'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Confirmez votre mot de passe') !!}
                            {!! Form::password('password', old('Mot de passe'),
                                ['class' => 'form-control',
                                'placeholder' => 'Mot de passe'
                                ])
                            !!}
                        </div>

                    <div class="panel-footer">
                        {!! Form::submit('Modifier',
                            [ 'class' => 'btn btn-primary btn btn-jsi'])
                        !!}

                        {!! Form::close() !!}


                        <a class="btn btn-default btn-modifier" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
@endsection