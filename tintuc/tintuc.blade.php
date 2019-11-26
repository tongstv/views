@extends("app")

@section('content')
    <link href="{{url('assets')}}/css/flexslider.css" rel="stylesheet" type="text/css">
    <script defer src="{{url('assets')}}/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 135,
                itemMargin: 10,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
<div class="page">
        <div class="widget">
            <!-- slide tin tức -->
            <div id="slider" class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        <li class="flex-active-slide" style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news1.png" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                        <a href="tin-tuc.html">Kiến thức sim</a> / <a href="tin-tuc.html">Tin nhà mạng</a>
                                    </div>
                                    <a href="noi-dung.html">
                                        <h3 class="slides-detail--title">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news2.png" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                        <a href="tin-tuc.html">Kiến thức sim</a> / <a href="tin-tuc.html">Tin nhà mạng</a>
                                    </div>
                                    <a href="#">
                                        <h3 class="slides-detail--title">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news3.png" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                        <a href="tin-tuc.html">Kiến thức sim</a> / <a href="tin-tuc.html">Tin nhà mạng</a>
                                    </div>
                                    <a href="noi-dung.html">
                                        <h3 class="slides-detail--title">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news4.png" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                        <a href="tin-tuc.html">Kiến thức sim</a> / <a href="tin-tuc.html">Tin nhà mạng</a>
                                    </div>
                                    <a href="noi-dung.html">
                                        <h3 class="slides-detail--title">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news5.png" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                        <a href="tin-tuc.html">Kiến thức sim</a> / <a href="tin-tuc.html">Tin nhà mạng</a>
                                    </div>
                                    <a href="noi-dung.html">
                                        <h3 class="slides-detail--title">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
            <!-- thumnail slide -->
            <div id="carousel" class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        <li class="flex-active-slide" style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news1.png" alt="" draggable="false">
                        </li>
                        <li style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news2.png" alt="" draggable="false">
                        </li>
                        <li style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news3.png" alt="" draggable="false">
                        </li>
                        <li style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news4.png" alt="" draggable="false">
                        </li>
                        <li style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img src="{{url('assets')}}/images/news5.png" alt="" draggable="false">
                        </li>
                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
        </div>
        <!-- nhom tin tuc -->
        <div class="widget">
            <div class="widget--head">
                <h4 class="title">Cách chọn sim</h4>
                <a href="tin-tuc.html" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="post-group">
                <!-- post large -->
                <div class="post post-lg">
                    <a href="noi-dung.html"><img src="images/post1.png" alt=""></a>
                    <div class="cat-link">
                        <a href="tin-tuc.html">Cách chọn sim</a> / <a href="tin-tuc.html">Ý nghĩa sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="noi-dung.html">Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <div class="post post-sm">
                    <!-- post small -->
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Làm thế nào để lựa chọn đầu số đẹp cho sim Lặp Kép?">
                                <img src="{{url('assets')}}/images/post3.png" alt="Làm thế nào để lựa chọn đầu số đẹp cho sim Lặp Kép?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Làm thế nào để lựa chọn đầu số đẹp cho sim Lặp Kép?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Làm thế nào để chọn sim năm sinh 1983 phù hợp nhất?">
                                <img src="{{url('assets')}}/images/post4.png" alt="Làm thế nào để chọn sim năm sinh 1983 phù hợp nhất?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Làm thế nào để chọn sim năm sinh 1983 phù hợp nhất?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bí quyết chọn sim số đẹp cho sim Taxi cực chính xác">
                                <img src="{{url('assets')}}/images/post5.png" alt="Bí quyết chọn sim số đẹp cho sim Taxi cực chính xác">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="#">Bí quyết chọn sim số đẹp cho sim Taxi cực chính xác</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget--head">
                <h4 class="title">Ý nghĩa sim </h4>
                <a href="tin-tuc.html" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="post-group">
                <!-- post large -->
                <div class="post post-lg">
                    <a href="noi-dung.html"><img src="images/post1.png" alt=""></a>
                    <div class="cat-link">
                        <a href="tin-tuc.html">Cách chọn sim</a> / <a href="tin-tuc.html">Ý nghĩa sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="tin-tuc.html">Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <div class="post post-sm">
                    <!-- post small -->
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post3.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post4.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post5.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget-left">
                <div class="widget--head">
                    <h4 class="title">Kiến thức sim </h4>
                    <a href="tin-tuc.html" class="view-all"><span>Xem thêm</span></a>
                </div>
                <!-- post large -->
                <div class="post post-lg">
                    <a href="#"><img src="images/post1.png" alt=""></a>
                    <div class="cat-link">
                        <a href="tin-tuc.html">Cách chọn sim</a> / <a href="tin-tuc.html">Ý nghĩa sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="noi-dung.html">Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <!-- post small -->
                <div class="post-sm-item">
                    <div class="thumb">
                        <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="post-sm-item">
                    <div class="thumb">
                        <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            <img src="{{url('assets')}}/images/post3.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-right">
                <div class="widget--head">
                    <h4 class="title">Các dạng sim </h4>
                    <a href="tin-tuc.html" class="view-all"><span>Xem thêm</span></a>
                </div>
                <!-- post large -->
                <div class="post post-lg">
                    <a href="noi-dung.html"><img src="images/post6.png" alt=""></a>
                    <div class="cat-link">
                        <a href="tin-tuc.html">Các dạng sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="noi-dung.html">Bí quyết chọn sim Thần Tài cho người kinh doanh</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <!-- post small -->
                <div class="post-sm-item">
                    <div class="thumb">
                        <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="post-sm-item">
                    <div class="thumb">
                        <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            <img src="{{url('assets')}}/images/post3.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget--head">
                <h4 class="title">Giải mã số sim </h4>
                <a href="tin-tuc.html" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="post-group">
                <!-- post large -->
                <div class="post post-lg">
                    <a href="noi-dung.html"><img src="images/post1.png" alt=""></a>
                    <div class="cat-link">
                        <a href="tin-tuc.html">Cách chọn sim</a> / <a href="#">Ý nghĩa sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="noi-dung.html">Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <div class="post post-sm">
                    <!-- post small -->
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href=".html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post3.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post4.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="noi-dung.html" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post5.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="noi-dung.html">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget--head">
                <h4 class="title">tin top sim </h4>
                <a href="#" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="post-group">
                <!-- post large -->
                <div class="post post-lg">
                    <a href="#"><img src="images/post1.png" alt=""></a>
                    <div class="cat-link">
                        <a href="#">Cách chọn sim</a> / <a href="#">Ý nghĩa sim</a>
                    </div>
                    <h3 class="post-title">
                        <a href="#">Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát</a>
                    </h3>
                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="#">Khánh Duy</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>
                    <div class="post-description">
                        <p>
                            Ý nghĩa và cách chọn sim đuôi 1468 – Sinh Tài Lộc Phát4.9 (98.18%) 11 votes Bạn đang muốn sở hữu sim đuôi 1468 nhưng lại chưa nắm rõ được …
                        </p>
                    </div>
                </div>
                <div class="post post-sm">
                    <!-- post small -->
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="#" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post2.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="#">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="#" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post3.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="#">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="#" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post4.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="#">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="#" title="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                                <img src="{{url('assets')}}/images/post5.png" alt="Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="#">Bạn đã biết cách chọn sim số đẹp sao cho thật ấn tượng chưa?</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget--head">
                <h4 class="title">tin nhà mạng </h4>
                <a href="#" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="row">
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="Bạn đã biết cách mua thêm dung lượng 4G Viettel cho mình chưa?">
                            <img src="{{url('assets')}}/images/post7.png" alt="Bạn đã biết cách mua thêm dung lượng 4G Viettel cho mình chưa?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">Bạn đã biết cách mua thêm dung lượng 4G Viettel cho mình chưa?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng">
                            <img src="{{url('assets')}}/images/post8.png" alt="Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">Lợi ích thực sự từ những gói cước khuyến mãi của các nhà mạng</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="TOP 3 gói 4G giá “siêu rẻ”, lên tới 5GB dành cho “fan Liên Quân”">
                            <img src="{{url('assets')}}/images/post9.png" alt="TOP 3 gói 4G giá “siêu rẻ”, lên tới 5GB dành cho “fan Liên Quân”">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">TOP 3 gói 4G giá “siêu rẻ”, lên tới 5GB dành cho “fan Liên Quân”</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="Giả mạo số tổng đài quay trở lại- cẩn thận mất tiền oan">
                            <img src="{{url('assets')}}/images/post10.png" alt="Giả mạo số tổng đài quay trở lại- cẩn thận mất tiền oan">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">Giả mạo số tổng đài quay trở lại- cẩn thận mất tiền oan</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="Giải đáp khi nào có thể sử dụng mạng 5G?">
                            <img src="{{url('assets')}}/images/post11.png" alt="Giải đáp khi nào có thể sử dụng mạng 5G?">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">Giải đáp khi nào có thể sử dụng mạng 5G?</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 post-grid">
                    <div class="thumb">
                        <a href="#" title="Phân biệt 4G nhà mạng nào rẻ nhất 2019">
                            <img src="{{url('assets')}}/images/post12.png" alt="Phân biệt 4G nhà mạng nào rẻ nhất 2019">
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="#">Phân biệt 4G nhà mạng nào rẻ nhất 2019</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">Tháng Tư 12, 2019</time></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    @endsection

@section('right')

    @include("right")
   @endsection