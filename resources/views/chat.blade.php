@extends('app')
@section('head_extra')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="FAQ" class="page-header">
            <h1>FAQ</h1>
        </div>
        @for($i = 0; $i < 4; $i++)
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="fa fa-thumbs-o-up"></span>
                    Help #{{ $i + 1 }} Que que que que?
                </div>
                <div class="panel-body">
                    Yade yade yade yade yade.
                </div>
            </div>
        </div>
        @endfor
    </div>
    <div class="row">
        <div id="Support" class="page-header">
            <h1>Support Chat</h1>
        </div>
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="fa fa-thumbs-o-up"></span>
                    Chat with our experts!
                </div>
                <div class="panel-body">
                    @for($i = 0; $i < 7; $i++)
                        @if ($i % 2)
                            User: Can you repeat that?
                            <hr />
                        @else
                            Support: How can I help you?
                            <hr />
                        @endif
                    @endfor
                    <div class="form-group">
                        <label for="chat">Reply</label>
                        <input type="text" class="form-control" id="chat" placeholder="User Message">
                    </div>
                    <a href="#" class="btn btn-default">Send</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script_extra')
@stop
