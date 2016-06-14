@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bloc-index">
        @include('errors.message')
       <div class="col-xs-6">
                <div class="dropdown dropdown-margin">
                    <button class="btn btn-default dropdown-toggle btn-trie" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Type de cuisine
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu scrollable-menu categorie-menu menu-trie" role="menu">
                        <li><a href="{{ route('post.tag', '1') }}">Français</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '2') }}">Chinois</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '3') }}">Japonais</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '4') }}">Italien</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '5') }}">Américain</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '6') }}">Libanais</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('post.tag', '7') }}">Autre</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle btn-trie" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Région
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
        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="{{ route('post.show', $post->id) }}">
                    <img src="{{ asset($post->img) }}" alt="" class="img-responsive image">
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
                        <span class="lieu"><b>{{ $post->lieu }}</b></span>
                    </div>
                    <div class="col-xs-4">
                        
                    </div>
                    <div class="col-xs-4">
                        <span class="tag">
                        <b>@if($post->type == '1')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Français</a>
                                        @elseif($post->type == '2')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Chinois</a>
                                        @elseif($post->type == '3')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Japonais</a>
                                        @elseif($post->type == '4')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Italien</a>
                                        @elseif($post->type == '5')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Américain</a>
                                        @elseif($post->type == '6')
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Libanais</a>
                                        @else
                                            <a class="tag" href="{{ route('post.tag', $post->type) }}">#Autre</a>
                                        @endif</b>
                        </span>
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