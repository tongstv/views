@extends('app')

@section('content')
    <div class="text-box">
        <h1>Sim số đẹp</h1>
        <div class="text-box-content">
            Với hơn <strong>3O</strong>.OOO.OOO số sim có tại <strong>TONG KHO SIM</strong>, liệu có hay không 1 <em>"số
                sim đúng sở thích của bạn"</em>...Với thế mạnh là các số sim đẹp giá chỉ từ <strong>499.000đ</strong>
            bạn sẽ <em>"không khỏi ngỡ ngàng"</em>....khi sim cùng dạng trên thị trường không dưới 3
            triệu.<br/><br/><strong style="color:red">LƯU Ý</strong>: Bạn sẽ nhận được sim tận tay mà không phải trả
            thêm 1 xu nào khác.
        </div>
    </div>
    <!-- block sim -->

    @foreach($data AS $row)
        <div class="block sim row no-gutters">
            <h3 class="block-head"><i class="fa fa-bullhorn"></i> {{@$row->simhot_name}}</h3>
            <div class="row2">
                <!-- first item -->


                @foreach($row->list AS $r)


                    @if ($loop->first)
                        <div class="col-md-6">
                            <div class="sim-item sim-hot sim-item-first ">
                                @else
                                    <div class="col-md-3 col-6">
                                        <div class="sim-item sim-hot">
                                            @endif


                                            <a href="{{url($r->sim1)}}">

                                                <img src="{{url('assets')}}/images/icon_{{mang($r->mang)}}.png"
                                                     alt="{{mang($r->mang)}}">


                                                <p>
                                                    <span class="sim-item--number">{{$r->sim1}}</span>
                                                    <span class="sim-item--price">{{number_format($r->giaban*1000000)}} đ</span>
                                                    <del class="sim-item--priceDel">{{number_format(round(($r->giaban + $r->giaban*$row->simhot_sale/100)*1000000))}}
                                                        đ
                                                    </del>
                                                </p>
                                            </a>
                                            <a class="other" href="{{url($r->sim1)}}">Đặt mua</a>
                                        </div>
                                    </div>

                                    @endforeach

                                    <div class="col-md-3 col-6">
                                        <div class="view-more sim-hot">
                                            <a href="{{url("simhot")}}/{{$row->id}}">
                                                <i class="fa fa-location-arrow fa-2x"></i> XEM THÊM
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>


                    @endforeach
                    <!-- #block sim -->
                        <div class="text-box">
                            <div class="text-box-content">
                                <h2><strong>1. Sim số đẹp là gì?</strong></h2>
                                Hiểu theo cách đơn giản nhất, <strong>sim số đẹp</strong> là sim dễ nhớ.Tức là có nhiều
                                số, cặp số lặp, chuỗi số lặp một cách đặc biệt, hoặc luận nghĩa của sim theo quan niệm
                                dân gian mang nhiều may mắn, tài lộc.
                                <h2><strong>2. Những dạng sim số đẹp:</strong></h2>
                                Trên thị trường sim có rất nhiều dạng <em>sim số đẹp</em>, trong đó nổi tiếng và phổ
                                biến hơn cả là các dạng sim lục quý, sim ngũ quý, sim taxi, Sim tam hoa, Sim lộc phát,
                                Sim tiến lên... <a href="#" class="more">Xem thêm</a>

                                <div class="content">
                                    <h3><strong>a. Sim lục quý, ngũ quý, tứ quý, tam hoa:</strong></h3>
                                    Đây là dạng sim lặp lại liên tục 1 con số, <strong>VD</strong>: lục quý
                                    <em>(666666)</em>, ngũ quý <em>(55555)</em>, tứ quý <em>(8888)</em>, tam hoa <em>(333)</em>.<br/><br/>
                                    Việc lặp lại con số càng nhiều thì giá trị chiếc sim càng cao. <strong>ĐẶC
                                        BIỆT</strong> sim Lục quý hay Ngũ quý là dạng sim Vip luôn nằm trong tầm ngắm
                                    của những doanh nhân, doanh nghiệp lớn. Nó không chỉ thể hiện đẳng cấp người sở hữu
                                    mà còn là "Đại sứ thương hiệu" cho doanh nghiệp.
                                    <h3><strong>b. Sim taxi:</strong></h3>
                                    Sim số đẹp Taxi là dạng sim lặp lại 6 con số cuối, dưới dạng lặp 2 hoặc lặp 3.
                                    <strong>VD</strong>: *979.979 hoặc *89.89.89.
                                    Sở dĩ gọi là sim Taxi vì dạng sim này thường được các hãng Taxi sử dụng làm Hotline.
                                    Khách hàng chỉ cần đọc qua 1 - 2 lần là có thể nhớ ngay.
                                    <h3><strong>c. Sim lộc phát:</strong></h3>
                                    Sim Lộc phát, Phát lộc là dạng <em>sim số đẹp</em> có chứa các số đuôi 68, 86, 6868,
                                    6886... Đây là lựa chọn hàng đầu cho giới kinh doanh khi chọn số đẹp làm con số may
                                    mắn với mong muốn gặp nhiều thuận lợi, tài lộc.
                                    <h3><strong>d. Sim tiến lên: </strong></h3>
                                    Sim số đẹp tiến lên là dạng sim số tiến, số sảnh. <strong>VD</strong>: 6789, 1234,
                                    2468... Với mong muốn mọi sự tiến tới, suôn sẻ thì đây cũng là dạng sim số đẹp được
                                    nhiều người yêu thích vì có ý nghĩa đặc biệt và giá cả lại phải chăng.
                                    <h2><strong>3. Sở hữu sim số đẹp, giá rẻ?</strong></h2>
                                    <strong>Sim số đẹp</strong> không chỉ thể hiện được được đẳng cấp mà còn thể hiện
                                    được nét riêng biệt trong cá tính của bạn. Bắt kịp xu hướng chọn sim số đẹp không
                                    chỉ giúp bạn sưu tập được những số sim ấn tượng mà còn giúp bạn có những kiến thức
                                    sâu rộng về sim số.<br/><br/>
                                    Đến với <strong><span style="color: #ff0000;">TOPSIM.vn</span></strong>, bạn hoàn
                                    toàn yên tâm việc chọn sim trở nên dễ dàng hơn bao giờ hết: <em>"Số đẹp như mơ, giá
                                        rẻ bất ngờ"!!</em>
                                </div>
                            </div>
                        </div>
@endsection

@section('right')

    @include('right')
@endsection