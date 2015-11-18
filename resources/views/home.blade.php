@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="SportChamps" class="page-header">
            <h1>SportChamps</h1>
        </div>
        <p>
            Welcome to <b>SportChamps</b>, Malaysia's largest sport e-Commerce.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.
        </p>
    </div>
    <div class="row">
        <div id="Featured" class="page-header">
            <h1>Featured</h1>
        </div>
        @for($i = 0; $i < 3; $i++)
            @include('templates.item', ['caption' => 'Featured #' . ($i + 1), 'xs' => 12, 'md' => 4])
        @endfor
    </div>
    <div class="row">
        <div id="Sale" class="page-header">
            <h1>On Sale</h1>
        </div>
        @for($i = 0; $i < 6; $i++)
            @include('templates.item', ['caption' => 'Sale #' . ($i + 1), 'xs' => 6, 'md' => 4])
        @endfor
    </div>
</div>
@stop

@section('script_extra')
@stop
