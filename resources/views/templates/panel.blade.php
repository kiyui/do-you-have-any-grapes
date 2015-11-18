<div class="col-xs-{{ $xs }} col-md-{{ $md }}">
    <div class="panel panel-success">
        <div class="panel-body">
            <img src="{{  asset('images/plain.png')  }}" class="col-xs-12 col-md-{{ $img }}" />
            <div class="col-xs-12 col-md-{{ 12 - $img }}">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.
            </div>
        </div>
        <div class="panel-footer">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star-o"></span>
            <div class="pull-right">{{ $name }}</div>
        </div>
    </div>
</div>
