<div class="header-bottom" style="background-color: #0277b8;">
    <div class="container">
        <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
            <i class="fa fa-bars"></i></a>
        <div class="visible-xs clearfix"></div>
        <nav class="main-menu">
            <ul class="l-inline ov">
                <li><a href="{{route('trangchu')}}">Home</a></li>
                <li><a>Category</a>
                    <ul class="sub-menu">
                        @foreach($loai_sp as $loai)
                            <li><a href="{{route('chungloai', $loai->id)}}">{{$loai->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('gioithieu')}}">Introduce</a></li>
                <li><a href="{{route('lienhe')}}">Contact</a></li>
            </ul>
            <div class="clearfix"></div>
        </nav>
    </div> <!-- .container -->
</div>
