@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bloc-index">
        @include('errors.message')

        @foreach($list as $post)
        <div class="panel panel-default">    
            <div class="panel-header-msg">
                <span class="contenu-msg">{{ $post->message  }}</span>

            <div class="row">
            	<div class="col-xs-6 telto">
                    <a href="tel:{{ $post->tel }}"><i class="fa fa-phone fa-5"></i><div class="clearfix"></div>  
                    <b>Appeler</b></a>
                                
            	</div>
            	<div class="col-xs-6 mailto">
                    <a href="mailto:{{ $post->email }}"><i class="fa fa-envelope fa-5"></i><div class="clearfix"></div>
                    <b>Envoyer un mail</b></a>
            	</div>
            </div>
                <hr>
            </div>
            <div class="panel-footer-msg">
                <span class="date-msg"><b>Reçu le : </b>{{ $post->created_at  }}</span>
            </div>
		</div>

    @endforeach
</div>
</div>
@endsection