@extends('app')



@section('content')
    <ol class="breadcrumb">
        <li><a href="{{url()}}"><span>Trang chủ</span></a></li>
        <li><a href="{{@loai($data->loai)[1]}}"><span>{{@loai($data->loai)[0]}}</span></a></li>
        <li class="active">{{$data->sim1}}</li>
    </ol>
    <!-- panel -->
    <div class="panel row no-gutters">
        <div class="panel-header">THÔNG TIN SỐ SIM</div>
        <div class="panel-content">
            <div class="row">
                <ul class="sim-info col-md-6">
                    <li>
                        <label for="">Sim số đẹp:</label>
                        <h1 class="sim-info--title">{{$data->sim1}}</h1>
                    </li>
                    <li>
                        <label for="">Giá bán:</label>
                        <b class="sim-info--price" id="giatien"
                           data-gia="{{tanggiamgia($data->simdl,$data->giaban)*1000000}}">{{number_format($data->giaban*1000000,0,".",".")}} đ</b>
                    </li>
                    <li>
                        <label for="">Mạng di động:</label>
                        @php
                            $row=$data
                        @endphp
                        <span class="sim-info--nw">

                            @include("bangso.mang")

                            </span>
                    </li>
                    <li>
                        <label for="">Loại sim:</label>
                        <span class="sim-info--type">

                                @if($data->loai)
                                <a href="  {{loai($data->loai)[1]}}">

                                    {{loai($data->loai)[0]}}
                                    </a>
                            @endif
                            </span>
                    </li>
                </ul>
                <div class="sim-img col-md-6">


                    <img src="http://img.stv.vn/img.php?text3=&text4=&text1={{$data->sim1}}&text2=Gi%C3%A1:%20{{$data->giaban*1000}}%20%C4%91&left3=250&host=tongkhosim.com&type=jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- panel -->
    <div class="panel row no-gutters">
        <div class="panel-header">MUA SIM {{$data->sim1}}</div>
        <div class="panel-content">
            <div id="order" class="frm-order">
                <form action="dat-thanh-cong.html" method="post">
                    <input type="hidden" name="sosim" value="{{$data->sim1}}">
                    <h3 class="frm-order--head">ĐẶT MUA SIM</h3>
                    <label for="number">Điện thoại liên hệ*:</label>
                    <input type="tel" name="number" placeholder="Điện thoại liên hệ">
                    <label for="number">Họ và tên*:</label>
                    <input type="text" name="name" placeholder="Họ và tên của bạn">
                    <label for="number">Địa chỉ*:</label>
                    <input type="tel" name="address" placeholder="Địa chỉ">

                    <div class="d-flex line">
                        <input type="checkbox" placeholder="Thanh toán khi nhận hàng" name="pay_method" value="1">
                        <label class="auto" for="">Thanh toán khi nhận hàng </label>
                    </div>
                    <div class="d-flex line">
                        <input onclick="openBox()" data-box="chuyenkhoannh" type="checkbox"
                               placeholder="Chuyển khoản ngân hàng" name="banking" value="2">
                        <label class="auto" for="">Chuyển khoản ngân hàng</label>
                    </div>
                    <div class="d-flex line">
                        <input onclick="openBox()" data-box="tragop" type="checkbox"
                               placeholder="Chuyển khoản ngân hàng" name="installment" value="2">
                        <label class="auto" for="">Trả góp</label>
                    </div>
                    <div class="message text-center">
                        <input type="submit" name="submit" value="Đặt sim">
                    </div>
                    <h2 class="message--foot">
                        So dep <a href="{{url($data->sim1)}}">{{$data->sim1}}</a>, giá sim <a
                                href="{{url($data->sim1)}}">{{$data->sim1}}</a>,
                        so dien thoai <a href="{{url($data->sim1)}}">{{$data->sim1}}</a>
                    </h2>
                </form>
            </div>
        </div>
    </div>
    <div class="text-box">
        <div class="text-box-content">
            <h3>Cách thức mua sim {{$data->sim1}}:</h3>
            <ul>
                <li>Đặt mua sim trên website hoặc điện Hotline</li>
                <li>NVKD sẽ gọi lại tư vấn và xác nhận đơn hàng</li>
                <li>Nhận sim tại nhà, kiểm tra thông tin chính chủ và thanh toán cho người giao sim</li>
            </ul>
            <h3 class="h32">Cách thức giao sim {{$data->sim1}}:</h3>
            <ul>
                <li>Cách 1: {{env('SITE_NAME')}} sẽ giao sim trong ngày và thu tiền tại nhà <i>(áp dụng tại các thành
                        phố, thị trấn
                        lớn)</i></li>
                <li>Cách 2: Quý khách đến cửa hàng {{env('SITE_NAME')}} để nhận sim trực tiếp <i>(Danh sách của hàng ở
                        chân
                        website)</i></li>
                <li>Cách 3: {{env('SITE_NAME')}} sẽ giao sim theo đường bưu điện và thu tiền tại nhà.</li>
            </ul>
            <p><strong>CHÚ Ý</strong>: <i>Quý khách sẽ không phải thanh toán thêm bất kỳ 1 khoản nào khác ngoài giá
                    sim</i></p>
            <p><em>Chúc quý khách gặp nhiều may mắn khi sở hữu thuê bao {{$data->sim1}}</em></p>
        </div>
    </div>

@endsection


@section('right')

    @include('right')
@endsection