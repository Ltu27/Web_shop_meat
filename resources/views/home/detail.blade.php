@extends('master.main')
@section('title', 'Chi tiết đơn hàng')
@section('main')
    
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="uploads/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Chi tiết đơn hàng</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area">
        
        <div class="contact-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thông tin khách hàng</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <td>{{ $auth->name }}</td>
                                </tr>
                                <tr>
                                    <th>số điện thoại</th>
                                    <td>{{ $auth->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>{{ $auth->address }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3>Thông tin người nhận</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <td>{{ $order->name }}</td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td>{{ $order->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>{{ $order->address }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <h3>Thông tin sản phẩm</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->details as $item)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>
                                    <img src="uploads/product/{{ $item->product->image }}" width="40" alt="">    
                                </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price) }}</td>
                                <td>{{ number_format($item->price * $item->quantity) }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->


@endsection