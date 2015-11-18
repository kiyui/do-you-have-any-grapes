@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Shipping" class="page-header">
            <h1>Shipping</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="profileInputText">Address</label>
                <textarea class="form-control" id="profileInputText" placeholder="Address"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Continue to PayPal</button>
        </form>
    </div>
</div>
@stop

@section('script_extra')
@stop
