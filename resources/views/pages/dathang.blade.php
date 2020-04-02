@extends('index')

@section('title')
    Đặt hàng
@endsection

@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Order</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{route('trangchu')}}">Home</a> / <span>Order</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

            <form action="{{route('dathang2')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Order</h4>
                        <div class="space20">&nbsp</div>

                        <div class="form-block">
                            <label for="name">Name*</label>
                            <input type="text" name="name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-block">
                            <label>Sex </label>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nam"
                                   checked="checked" style="width: 10%">
                            <span style="margin-right: 10%">Male</span>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                                   style="width: 10%">
                            <span>Female</span>

                        </div>

                        <div class="form-block">
                            <label for="email">Email*</label>
                            <input type="email" name="email" required placeholder="expample@gmail.com">
                        </div>

                        <div class="form-block">
                            <label for="address">Address*</label>
                            <input type="text" name="address" placeholder="Street Address" required>
                        </div>


                        <div class="form-block">
                            <label for="phone">Phone number*</label>
                            <input type="text" name="phone" required>
                        </div>

                        <div class="form-block">
                            <label for="notes">Note</label>
                            <textarea name="notes"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Your order</h5></div>
                            @if (Session::has('cart'))
                                <div class="your-order-body" style="padding: 0px 10px">
                                    <div class="your-order-item">
                                        <div>
                                            @foreach($product_cart as $product)
                                                <div class="media">
                                                    <img width="25%" src="{{$product['item']['image']}}"
                                                         class="pull-left">
                                                    <div class="media-body">
                                                        <p class="font-large">Men's Belt</p>
                                                        <span class="color-gray your-order-info">
                                                        Giá: {{$product['price']}} VND
                                                    </span>
                                                        <span class="color-gray your-order-info">
                                                        Số lượng: {{$product['qty']}}
                                                    </span>
                                                        <span class="color-gray your-order-info">
                                                        Thành tiền: {{$product['qty'] * $product['price']}} VND
                                                    </span>
                                                    </div>
                                                    <a href="{{route('xoagiohang', $product['item']['id'])}}">
                                                        Xóa
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="your-order-item">
                                        <div class="pull-left">
                                            <p class="your-order-f18">Total:</p>
                                        </div>
                                        <div class="pull-right">
                                            <h5 class="color-black">{{Session('cart')->totalPrice}} VND</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @else
                                <br>
                                <p style="text-align: center">You have no items</p>
                                <br>
                            @endif
                            <div class="your-order-head"><h5>Payments</h5></div>

                            <div class="your-order-body">
                                <ul class="payment_methods methods">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                               name="payment_method" value="COD" checked="checked"
                                               data-order_button_text="">
                                        <label for="payment_method_bacs">Payment on delivery </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            The store will send the goods to your address, you see the goods and then
                                            pay the delivery staff.
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            @if (Session::has('cart'))
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Order">
                                </div>
                            @endif

                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div>
@endsection
