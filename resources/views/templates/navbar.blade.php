<nav class="navbar navbar-default navbar-fixed-bottom">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-chevron-up"></i>
        </button>
        <div class="dropup">
            <a class="navbar-brand" href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-lg fa-bars"></span>
                {{ $title }} 
                (<span class="fa {{ $icon or "fa-bug" }}"></span>)
            </a>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li><a href="{{ URL::to('home') }}">Home</a></li>
                <li><a href="{{ URL::to('category') }}">Categories</a></li>
                <li><a href="{{ URL::to('cart') }}">Shopping Cart</a></li>
                <li><a href="{{ URL::to('profile') }}">User Profile</a></li>
                <li><a href="{{ URL::to('login') }}">User Login</a></li>
                <li><a href="{{ URL::to('registration') }}">User Registration</a></li>
                <li><a href="{{ URL::to('chat') }}">FAQ and Support</a></li>
                <li><a href="{{ URL::previous() }}">Previous Page</a></li>
            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" role="tablist">
            @if(isset($sections))
            {{-- Only display sections if defined!  --}}
            @foreach($sections as $section)
            <li><a href="#{{ $section }}">{{ $section }}</a></li>
            @endforeach
            @endif
        </ul>
    </div>
</div>
</nav>
