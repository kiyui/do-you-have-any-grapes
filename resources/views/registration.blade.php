@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Register" class="page-header">
            <h1>Register</h1>
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
            <div class="form-group">
                <label for="profileInputPassword2">Password</label>
                <input type="password" class="form-control" id="profileInputPassword1" placeholder="Repeat Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@stop

@section('script_extra')
@stop
