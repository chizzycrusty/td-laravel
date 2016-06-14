@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
            <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'post.store',
                            'method' => 'POST',
                            'enctype' => 'multipart/form-data'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', '', 
                                    ['class' => 'form-control',
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('img', 'Image :') !!}
                                {!! Form::file('img')!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('type', 'Type de cuisine : ') !!}
                                {!! Form::select('type', array('1' => 'Français', '2' => 'Chinois', '3' => 'Japonais', '4' => 'Thailandais', '5' => 'Américain', '6' => 'Libanais', '7' => 'Autre'),
                                    ['class' => 'form-control'
                                    ]);
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('content', 'Description') !!}
                                {!! Form::textarea('content', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => ''
                                    ]) 
                                !!}
                            </div>
                            
                            <div class="form-group">
                                {!! Form::label('adresse', 'Adresse') !!}
                                {!! Form::text('adresse', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => ''
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('postal', 'Code Postal') !!}
                                {!! Form::text('postal', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => ''
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('lieu', 'Ville') !!}
                                {!! Form::text('lieu', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => ''
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('region', 'Votre région') !!}
                                {!! Form::select('region', array('13' => 'Alsace', '14' => 'Aquitaine', '15' => 'Auvergne', '16' => 'Basse-Normandie', '17' => 'Bourgogne', '18' => 'Bretagne', '19' => 'Centre', '20' => 'Champagne-Ardenne', '21' => 'Corse', '22' => 'Franche-Comté', '23' => 'Guadeloupe', '24' => 'Guyanne', '25' => 'Haute-Normandie', '26' => 'Île-de-France', '27' => 'Languedoc-Roussillon', '28' => 'La Réunion', '29' => 'Limousion', '30' => 'Lorraine', '31' => 'Martinique', '32' => 'Mayotte', '33' => 'Midi-Pyrénées', '34' => 'Nord-Pas-de-Calais', '35' => 'Pays de la Loire', '36' => 'Picardie', '37' => 'Poitou-Charentes', '38' => 'Provence-Alpes-Côte d\'Azur', '39' => 'Rhône-Alpes'),
                                    ['class' => 'form-control'
                                    ]);
                                !!}
                            </div>
                        
                    <div class="panel-footer">
                        {!! Form::submit('Publier l\'article',
                            ['class' => 'btn btn-primary btn btn-jsi'])
                        !!}

                        {!! Form::close() !!}
                        <a class="btn btn-default  btn-modifier" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
@endsection