@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Category" class="page-header">
            <h1>
            {{ $name or "Category" }}
                <div class="dropdown pull-right">
                    <a class="btn btn-default" href="#" id="cLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-caret-down"></span>
                    {{ $name or "Category" }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cLabel">
                        <li><a href="{{ action('CategoryController@index', ['name' => "Apparel" ]) }}">Apparel</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Shoes" ]) }}">Shoes</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Badminton" ]) }}">Badminton</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Tennis" ]) }}">Tennis</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Football" ]) }}">Football</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Bowling" ]) }}">Bowling</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Swimming" ]) }}">Swimming</a></li>
                        <li><a href="{{ action('CategoryController@index', ['name' => "Martial Arts" ]) }}">Martial Arts</a></li>
                    </ul>
                </div>
            </h1>
        </div>
        @if ($name == "")
        <div class="jumbotron text-center">
            <h3>Select a category</h3>
        </div>
        @else
            @for($i = 0; $i < 12; $i++)
                @include('templates.item', ['caption' => $name . ' #' . ($i + 1), 'xs' => 6, 'md' => 3])
            @endfor
        @endif
    </div>
    @if ($name != "")
    <div class="row">
        <div id="Reccommendations" class="page-header">
            <h1>Reccommendations</h1>
        </div>
        @for($i = 0; $i < 4; $i++)
            @include('templates.item', ['caption' => 'Item #' . ($i + 1), 'xs' => 6, 'md' => 3])
        @endfor
    </div>
    @endif
</div>
@stop

@section('script_extra')
@stop
