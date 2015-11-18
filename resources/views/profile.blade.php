@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="Orders" class="page-header">
            <h1>Orders</h1>
        </div>
        @for($i = 0; $i < 4; $i++)
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="fa fa-ship"></span>
                    Shipping Item #{{ $i + 1 }}
                </div>
                <div class="panel-body">
                    Your item will arrive by 13th November 2076.
                    <hr />
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                            <span class="sr-only">75% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
    <div class="row">
        <div id="Settings" class="page-header">
            <h1>Settings</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="profileInputEmail1">Email address</label>
                <input type="email" class="form-control" id="profileInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="profileInputText">Address</label>
                <textarea class="form-control" id="profileInputText" placeholder="Address"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Receive promotional emails
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="submit" class="btn btn-danger">Request Password Reset</button>
        </form>
    </div>
</div>
@stop

@section('script_extra')
@stop
