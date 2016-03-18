@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row">
        @include('errors.message')
            @foreach($list as $bap)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('bap.show', $bap->id) }}">{{ $bap->name }}</a> | Soumis le : {{ $bap->created_at }}
                        </div>

                        <div class="panel-body">
                            <p>{{ $bap->type }} pour {{ $bap->NomPrenomCHEF }} <br>
                            @if($bap->accepted == 1) 
                                Statut: Accepté
                            @elseif($bap->accepted == 2)
                                Statut: Refusé
                            @elseif($bap->accepted == 0)
                                Statut: En attente
                            @endif
                            </p>
                        </div>
                        <div class="panel-footer">
                            

                            {!! Form::model($bap, array(
                                'route' => array('bap.destroy', $bap->id),
                                'method' => 'DELETE')) 
                            !!}

                            {!! Form::submit('Supprimer', ['class' => 'btn btn-default']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
            {!! $list->links() !!}
        </div>
    </div>
@endsection