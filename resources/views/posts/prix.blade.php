@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bloc-index">
        @include('errors.message')
        <div class="col-xs-4">
                <div class="dropdown dropdown-margin">
                    <button class="btn btn-default dropdown-toggle btn-trie" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Catégorie
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu categorie-menu menu-trie" role="menu">
                        <li><a href="{{ route('post.tag', '1') }}">Aide ménagère</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '2') }}">Jardinage</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '3') }}">Babysitting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '4') }}">Aide scolaire</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '5') }}">Informatique</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '6') }}">Bricolage</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '7') }}">Autre</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle btn-trie" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Region
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu categorie-menu menu-trie" role="menu">
                    <li><a href="{{ route('post.region', '13') }}">Alsace</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '14') }}">Aquitaine</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '15') }}">Auvergne</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '16') }}">Basse-Normandie</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '17') }}">Bourgogne</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '18') }}">Bretagne</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '19') }}">Centre</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '20') }}">Champagne-Ardenne</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '21') }}">Corse</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '22') }}">France-Comté</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '23') }}">Guadeloupe</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '24') }}">Guyanne</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '25') }}">Haute-Normandie</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '26') }}">Île-de-France</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '27') }}">Languedoc-Roussillon</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '28') }}">La Réunion</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '29') }}">Limousin</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '30') }}">Lorraine</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '31') }}">Martinique</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '32') }}">Mayotte</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '33') }}">Midi-Pyrénées</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '34') }}">Nord-Pas-de-Calais</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '35') }}">Pays de la Loire</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '36') }}">Picardie</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '37') }}">Poitou-Charentes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '38') }}">Provence-Alpes-Côte d’Azur</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.region', '39') }}">Rhône-Alpes</a></li>
                </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle btn-trie" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Prix
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu categorie-menu menu-trie" role="menu">
                        <li><a href="{{ route('post.prix', '8') }}">1€ - 10€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.prix', '9') }}">11€ - 20€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.prix', '10') }}">21€ - 30€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.prix', '11') }}">31€ - 40€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.prix', '12') }}">41€ - 50€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.prix', '40') }}">+ 50€</a></li>
                    </ul>
                </div>
            </div>
        @foreach($posts as $post)
            <div class="panel panel-default">
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
                        <br>
                </div>
                <div class="panel-bas">
                    <div class="row">
                    <div class="col-xs-4">
                        <p class="lieu"><b>{{ $post->lieu }}</b></p>
                    </div>
                    <div class="col-xs-4">
                        <p class="prix">
                        <b>@if($post->prix == '8')
                            <p class="prix">1€ - 10€</p>
                            @elseif($post->prix == '9')
                            <p class="prix">11€ - 20€</p>
                            @elseif($post->prix == '10')
                            <p class="prix">21€ - 30€</p>
                            @elseif($post->prix == '11')
                            <p class="prix">31€ - 40€</p>
                            @else
                            <p class="prix">41€ - 50€</a>
                            @endif</b>
                        </p>
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
                    </div>    
                    </div> 
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection