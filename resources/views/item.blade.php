@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Item" class="page-header">
            <h1>{{ $name }}<a href="{{ URL::to('cart') }}" class="pull-right btn btn-success">Add to Cart</a></h1>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="panel">
                <img class="img-responsive" src="{{ asset('images/plain.png') }}" />
                <div class="carousel-caption">
                    <h2>Item Image</h2>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
            <br />
        </div>
    </div>
    <div class="row">
        <div id="Related" class="page-header">
            <h1>Related Items</h1>
        </div>
        @for($i = 0; $i < 4; $i++)
            @include('templates.item', ['caption' => 'Item #' . ($i + 1), 'xs' => 6, 'md' => 3])
        @endfor
    </div>
    <div class="row">
        <div id="Reviews" class="page-header">
            <h1>Rating and Reviews</h1>
        </div>
        @for($i = 0; $i < 6; $i++)
            @include('templates.panel', ['name' => 'User #' . ($i + 1), 'xs' => 12, 'md' => 6, 'img' => 4])
        @endfor
    </div>
</div>
@stop

@section('script_extra')
@stop
