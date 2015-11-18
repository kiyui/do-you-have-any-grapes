@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Login" class="page-header">
            <h1>Login</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="profileInputEmail1">Email address</label>
                <input type="email" class="form-control" id="profileInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="profileInputPassword1">Password</label>
                <input type="password" class="form-control" id="profileInputPassword1" placeholder="Password">
            </div>
            <a href="{{ URL::to('home') }}" class="btn btn-default">Login</a>
        </form>
    </div>
</div>
@stop

@section('script_extra')
@stop
