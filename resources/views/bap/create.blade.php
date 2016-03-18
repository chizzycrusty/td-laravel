@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h2>Soumettre un projet BAP</h2></div>
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'bap.store',
                            'method' => 'POST'
                            ))
                        !!}
                        
                        <div class="form-group">
                            {!! Form::label('name', 'Nom du projet') !!}
                            {!! Form::text('name', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="panel-heading" style="text-align: center;"><h4>À propos du commanditaire</h4></div>

                        <div class="form-group">
                            {!! Form::label('NomPrenomCHEF', 'Nom et Prénom du commanditaire') !!}
                            {!! Form::text('NomPrenomCHEF', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fonctionCHEF', 'Fonction du commanditaire') !!}
                            {!! Form::text('fonctionCHEF', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('adresseCHEF', 'Adresse postale') !!}
                            {!! Form::text('adresseCHEF', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>
                            
                        <div class="form-group">
                            {!! Form::label('emailCHEF', 'Email') !!}
                            {!! Form::text('emailCHEF', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('telCHEF', 'Téléphone') !!}
                            {!! Form::text('telCHEF', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                         <div class="panel-heading" style="text-align: center;"><h4>À propos du contact</h4></div>

                        <div class="form-group">
                            {!! Form::label('NomPrenomCON', 'Nom et Prénom du contact') !!}
                            {!! Form::text('NomPrenomCON', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fonctionCON', 'Fonction du contact') !!}
                            {!! Form::text('fonctionCON', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('adresseCON', 'Adresse postale') !!}
                            {!! Form::text('adresseCON', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>
                            
                        <div class="form-group">
                            {!! Form::label('emailCON', 'Email') !!}
                            {!! Form::text('emailCON', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('telCON', 'Téléphone') !!}
                            {!! Form::text('telCON', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="panel-heading" style="text-align: center;"><h4>Votre fiche d'identité</h4></div>

                        <div class="form-group">
                            {!! Form::label('social', 'Raison social, activité ...') !!}
                            {!! Form::textarea('social', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('type', 'Type de demande') !!} <br>
                            {!! Form::label('type', 'Site Internet') !!}
                            {!! Form::radio('type', 'site')!!}
                            {!! Form::label('type', '3D') !!}
                            {!! Form::radio('type', '3D')!!}
                            {!! Form::label('type', 'Animation 2D') !!}
                            {!! Form::radio('type', '2D')!!}
                            {!! Form::label('type', 'Installation Multimédia') !!}
                            {!! Form::radio('type', 'multimedia')!!}
                            {!! Form::label('type', 'Jeux Vidéo') !!}
                            {!! Form::radio('type', 'JV')!!}
                            {!! Form::label('type', 'DVD') !!}
                            {!! Form::radio('type', 'DVD')!!}
                            {!! Form::label('type', 'Print') !!}
                            {!! Form::radio('type', 'print')!!}
                            {!! Form::label('type', 'CD ROM') !!}
                            {!! Form::radio('type', 'CD')!!}
                            {!! Form::label('type', 'Événement') !!}
                            {!! Form::radio('type', 'evenement')!!}
                            {!! Form::label('type', 'Autre') !!}
                            {!! Form::radio('type', 'autre')!!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('raison', 'Raison de la demande') !!}
                            {!! Form::textarea('raison', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contexte', 'Contexte de la demande') !!}
                            {!! Form::textarea('contexte', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('objectif', 'Objectifs de la demande') !!}
                            {!! Form::textarea('objectif', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contraintes', 'Contraintes particulières et informations complémentaires') !!}
                            {!! Form::textarea('contraintes', '', 
                                ['class' => 'form-control']) 
                            !!}
                        </div>

                        <div class="panel-footer">
                        {!! Form::submit('Publier l\'article',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}
                        <a class="btn btn-default" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
