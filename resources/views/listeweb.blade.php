@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($list as $post)
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
                                <div class="maison">
                                </div>

                            </div>
                            <div class="col-xs-4">
                                <p class="tag">
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
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
    </div>
</div>
@endsection