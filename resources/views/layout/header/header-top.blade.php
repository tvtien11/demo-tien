<div class="header-top">
    <div class="container">
        <div class="pull-right auto-width-right">
            <ul class="top-details menu-beta l-inline">
                @if(Auth::check())
                    <li><a><i class="fa fa-user"></i>{{Auth::user()->full_name}}</a></li>
                    <li><a href="{{route('dangxuat')}}"><i class="fa fa-user"></i>Log out</a></li>
                @else
                    <li><a href="{{route('dangki')}}">Registration</a></li>
                    <li><a href="{{route('dangnhap')}}">Log in</a></li>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div>
