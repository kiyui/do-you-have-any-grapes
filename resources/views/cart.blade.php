@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Cart" class="page-header">
            <h1>Your Shopping Cart<a href="{{ URL::to('checkout') }}" class="pull-right btn btn-success">Checkout</a></h1>
        </div>
        @for($i = 0; $i < 4; $i++)
            @include('templates.panel', ['name' => '1 x Cart Item #' . ($i + 1), 'xs' => 12, 'md' => 12, 'img' => 2])
        @endfor
    </div>
    <div class="row">
        <div id="Reccommendations" class="page-header">
            <h1>Reccommendations</h1>
        </div>
        @for($i = 0; $i < 4; $i++)
            @include('templates.item', ['caption' => 'Item #' . ($i + 1), 'xs' => 6, 'md' => 3])
        @endfor
    </div>
</div>
@stop

@section('script_extra')
@stop
