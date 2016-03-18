@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;" ><h3>{{ $bap->name }}</h3>Créer le : {{ $bap->created_at }}</div>

                <div class="panel-body">
                    <h5>Commanditaire</h5>
                    <p>
                    <strong>Nom et Prénom:</strong> {{ $bap->NomPrenomCHEF }} <br>
                    <strong>Fonction:</strong> {{ $bap->fonctionCHEF }} <br>
                    <strong>Adresse Postale:</strong> {{ $bap->adresseCHEF }} <br>
                    <strong>Email:</strong> {{ $bap->emailCHEF }} <br>
                    <strong>Téléphone:</strong> {{ $bap->telCHEF }}
                    </p>
                    <h5>Contact</h5>
                    <p>
                    <strong>Nom et Prénom:</strong> {{ $bap->NomPrenomCON }} <br>
                    <strong>Fonction:</strong> {{ $bap->fonctionCON }} <br>
                    <strong>Adresse Postale:</strong> {{ $bap->adresseCON }} <br>
                    <strong>Email:</strong> {{ $bap->emailCON }} <br>
                    <strong>Téléphone:</strong> {{ $bap->telCON }}
                    </p>
                    <p>
                    <strong>Raison sociale, activité ...:</strong> {{ $bap->social }} <br>
                    <strong>Type de demande:</strong> {{ $bap->type }} <br>
                    <strong>Raison de la demande:</strong> {{ $bap->raison }} <br>
                    <strong>Contexte de la demande:</strong> {{ $bap->contexte }} <br>
                    <strong>Objectifs de la demande:</strong> {{ $bap->objectif }} <br>
                    <strong>Contraintes et infos supplémentaires:</strong> {{ $bap->contraintes }} 
                    </p>

                    <h5>@if($bap->accepted == 1) 
                                Statut: Accepté
                            @elseif($bap->accepted == 2)
                                Statut: Refusé
                            @elseif($bap->accepted == 0)
                                Statut: En attente
                            @endif
                    </h5>
                    
                </div>

                <div class="panel-footer" style="text-align: center;">
                    {!! Form::model($bap,
                            array(
                            'route' => array('bap.update', $bap->id),
                            'method' => 'PUT'
                            ))
                        !!}
                    {!! Form::select('accepted', [
                           '0' => 'En attente',
                           '1' => 'Accepter',
                           '2' => 'Refuser']
                        ) !!}
                    {!! Form::submit('Publier l\'article',
                            ['class' => 'btn btn-primary'])
                    !!}
                    {!! Form::close() !!}

                    {!! Form::model($bap, array(
                        'route' => array('bap.destroy', $bap->id),
                        'method' => 'DELETE')) 
                    !!}

                    {!! Form::submit('Supprimer', ['class' => 'btn btn-default']) !!}
                

                    <a class="btn btn-default" href="{{ route('bap.index') }}">Retour aux projet</a>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection