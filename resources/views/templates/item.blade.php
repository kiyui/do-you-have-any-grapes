<div class="col-xs-{{ $xs }} col-md-{{ $md }}">
    <a href="{{ action('ItemController@index', ['name' => $caption ]) }}">
    <div class="panel">
        <img class="img-responsive" src="{{ asset('images/plain.png') }}" />
        <div class="carousel-caption">
            <h2>{{ $caption }}</h2>
        </div>
    </div>
    </a>
</div>
