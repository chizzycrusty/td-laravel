@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bloc-index">
        @include('errors.message')
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
                        <p class="prix"><b>{{ $post->prix }}€</b></p>
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