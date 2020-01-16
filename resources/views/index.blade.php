@extends('layouts.app')
@section('title','EM Hair Salon')

@section('content')
<div class="container-fluid">
    <!-- Start main carousel -->

    <div class="main_carousel" style="position: relative;">
        <div class="main-slideshow owl-carousel owl-theme">
            <div class="item" style="position: relative;">
                <img src="{{asset('images/image_slide03.jpg')}}" alt="images carousle">
                <div class="overlay"></div>
                <h2 class="title-overlay">Welcome to EM hair salon</h2>

            </div>
            <div class="item" style="position: relative;">
                <img src="{{asset('images/image_slide03.jpg')}}" alt="images carousle">
                <div class="overlay"></div>
                <h2 class="title-overlay">Welcome to EM hair salon</h2>

            </div>
            <div class="item" style="position: relative;">
                <img src="{{asset('images/image_slide03.jpg')}}" alt="images carousle">
                <div class="overlay"></div>
                <h2 class="title-overlay">Welcome to EM hair salon</h2>

            </div>
        </div>


        <!-- Book now -->
        <!-- <button type="button" class="btn btn-info btn-lg book-online" data-toggle="modal" data-target="#book-in-carousel">book now</button> -->
        <a class="btn btn-info btn-lg book-online" href="{{route('booking')}}">Book Now</a>
        <!-- Modal
        <div class="modal fade" id="book-in-carousel" role="dialog">
            <div class="modal-dialog">

                 Modal content
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="title-modal-book">Book now</h1>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title">book now</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div> -->
    </div>
</div>

<!-- Start Combo Seggestions-->

<div class="container">
    <div class="combo-suggestions">
        <h3 class="title-combo-suggestions"><i class="fas fa-forward icon-sale"></i><i>Discount combos</i></h3>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <div class="combo-sale">
                    <h4 class="title-combo">
                        <!--<span class="fas fa-crown icon-king-combo"></span>--><i>King combo</i></h4>
                    <i class="text-after-title-combo-suggestions">Sale 25%</i>
                    <ul class="combo-nav">
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Tẩy da chết</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                    </ul>
                    <div class="price-sale-off">
                        <del><i class="before-sale-off">100$</i></del>
                        <h5 class="sale-off"><span>-> only</span> 75$</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <div class="combo-sale">
                    <h4 class="title-combo">
                        <!--<span class="fas fa-crown icon-king-combo"></span>--><i>King combo</i></h4>
                    <i class="text-after-title-combo-suggestions">Sale 25%</i>
                    <ul class="combo-nav">
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Tẩy da chết</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                    </ul>
                    <div class="price-sale-off">
                        <del><i class="before-sale-off">100$</i></del>
                        <h5 class="sale-off"><span>-> only</span> 75$</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <div class="combo-sale">
                    <h4 class="title-combo">
                        <!--<span class="fas fa-crown icon-king-combo"></span>--><i>King combo</i></h4>
                    <i class="text-after-title-combo-suggestions">Sale 25%</i>
                    <ul class="combo-nav">
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Tẩy da chết</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                    </ul>
                    <div class="price-sale-off">
                        <del><i class="before-sale-off">100$</i></del>
                        <h5 class="sale-off"><span>-> only</span> 75$</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <div class="combo-sale">
                    <h4 class="title-combo">
                        <!--<span class="fas fa-crown icon-king-combo"></span>--><i>King combo</i></h4>
                    <i class="text-after-title-combo-suggestions">Sale 25%</i>
                    <ul class="combo-nav">
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Tẩy da chết</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                        <li class="combo-item">Đắp mặt nạ</li>
                    </ul>
                    <div class="price-sale-off">
                        <del><i class="before-sale-off">100$</i></del>
                        <h5 class="sale-off"><span>-> only</span> 75$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Combo Seggestions-->

<!-- Start service-->
<div class="container">
    <div class="our-ability">
        <div class="row">
            <div class="col-xl-12">
                <div class="content-our-ability">
                    <h3 class="title-body-our-ability"> What do we do </h3>
                    <p class="text-after-title-body-our-ability">The quality and service attitude that make up our brand !</p>
                    <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="some-service">
                    <img src="{{asset('images/em-hair-cut1.jpg')}}" width="100%" style="border-radius: 50%;">
                    <h4 class="title-some-service"> hairstylist</h4>
                    <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="some-service">
                    <img src="{{asset('images/wash-your-face.jpg')}}" width="100%" style="border-radius: 50%;">
                    <h4 class="title-some-service">wash your face</h4>
                    <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="some-service">
                    <img src="{{asset('images/Em-massage.jpg')}}" width="100%" style="border-radius: 50%;">
                    <h4 class="title-some-service">Massage</h4>
                    <p class="text-some-service">Cắt tóc nam chuyên nghiệp tại Minh Nghị Hair Salon được thực hiện bởi những nhà tạo mẫu tóc tài năng, giàu kinh nghiệm sẽ giúp phái mạnh tạo nên phong cách và ấn tượng riêng cho [...]</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="see-all-services">
                    <a href="#" class="link-see-all-services">See all services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End service-->

<div class="container-fluid">

    <!-- Start open time -->
    <div class="open-time" style="position: relative;">

        <div class="container">
            <div class="row">
                <div class="overlay-open-time"></div>
                <div class="col-xl-12 opening-time-summary">
                    <h3 class="title-open-time">Open time</h3>
                </div>
                <div class="col-xl-12 opening-time-summary">
                    <h4 class="text-after-title-open-time">Opening time of Em Hair Salon - Please track the opening time of Minh Nghi Hair Salon<br> to facilitate tracking and booking.</h4>
                    <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12  time-panel-in-ovrly">
                    <div class="time-panel">
                        <h4 class="title-time-panel">Monday</h4>
                        <ul class="list-time-panel">
                            <li class="item">8:00</li>
                            <li class="item">to</li>
                            <li class="item">22:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End open time -->
</div>

<!-- Start update on new trends -->

<div class="container">
    <div class="Update-on-new-trends">
        <div class="row">
            <div class="col-xl-12 ">
                <h3 class="title-update-on-trends">We are always updated with new hair trends</h3>
            </div>
            <div class="col-xl-12">
                <h4 class="text-after-update-on-trends">
                    Want to make a difference to your hair? So we are the one you need
                </h4>
                <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="slideshow2 owl-carousel owl-theme">
                    <div class="item ">
                        <img src="{{asset('images/update-trend1.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend2.png')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend3.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend4.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend5.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend6.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend7.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend8.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend9.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend10.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend11.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend12.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend13.png')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend14.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                    <div class="item ">
                        <img src="{{asset('images/update-trend15.jpg')}}" width="100%" alt="Update trend img">
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <p class="text-update-trends">In addition to service quality, we are also interested in new trends of hair , nails and massages to help you relax after a day of intense burning.</p>
            </div>
        </div>

    </div>
</div>
<!-- End update on new trends -->

<!-- Start Our Team -->
<div class="our-team-cover">
    <div class="container">
        <div class="our-team">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="title-our-team">Our professional team</h3>
                </div>
                <div class="col-xl-12">
                    <h4 class="text-after-title-our-team">We have a professional staff to make a difference for you</h4>
                    <p class="scissors">------ <span class="fas fa-cut scissors-icon"></span> ------</p>
                </div>
            </div>
            <div class="our-team-images">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 master-our-team">
                        <img src="{{asset('images/master-hair-cut1.jpg')}}" alt="our team">
                        <div class="content-after-team-images">
                            <p class="hair-consultant-for-men">Hair consultant for men</p>
                            <p class="name-of-consultant">Tom Hiddleston</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 master-our-team">
                        <img src="{{asset('images/makeup-specialist1.jpg')}}" alt="our team">
                        <div class="content-after-team-images">
                            <p class="hair-consultant-for-men">Hair consultant for men</p>
                            <p class="name-of-consultant">Aliyah</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 master-our-team">
                        <img src="{{asset('images/master-hair-cut1.jpg')}}" alt="our team">
                        <div class="content-after-team-images">
                            <p class="hair-consultant-for-men">Hair consultant for men</p>
                            <p class="name-of-consultant">Angel</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 master-our-team">
                        <img src="{{('images/makeup-specialist1.jpg')}}" alt="our team">
                        <div class="content-after-team-images">
                            <p class="hair-consultant-for-men">Hair consultant for men</p>
                            <p class="name-of-consultant">Sarah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Team -->
@endsection

@section('scripts')
<script>
    $('.main-slideshow').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        nav: false,
        dots: false,
        delay: 3000,
        // autoplaySpeed:true,
        responsive: {
            0: {
                items: 1,
                nav: false,
            }
        }

    });
    $('.slideshow2').owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: false,
        dots: false,
        delay: 3000,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false,
                loop: true,
            }
        }
    });
</script>
@endsection