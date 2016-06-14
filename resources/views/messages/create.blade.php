@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
            <div class="panel panel-default">

                {!! Form::open(array(
                            'route' => 'message.store'
                            ))
                        !!}
                    <div class="panel-body">

                            <div class="form-group">
                                {!! 
                                    Form::text('tel', '',
                                    ['class' => 'form-control', 'placeholder' => 'n° de téléphone'
                                    ])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! 
                                    Form::text('email', '',
                                    ['class' => 'form-control', 'placeholder' => 'Adresse e-mail'
                                    ])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! 
                                    Form::textarea('message', '',
                                    ['class' => 'form-control', 'placeholder' => ''
                                    ])
                                !!}

                                {!! Form::hidden('destinataire', $user->id)!!}
                            </div>


                    <div class="panel-footer">
                        {!! Form::submit('Envoyer le message',
                            ['class' => 'btn btn-jsi'])
                        !!}

                {!! Form::close() !!}
                <a class="btn btn-modifier" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                    </div>

                </div>
            </div>
    </div>
</div>
@endsection