@extends('main')
@section('content')

<div class="hero-wrap" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Now <span>It's easy for you</span> <span>Buy a Gaming PC</span></h1>
                    <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                    <a href="https://www.youtube.com/watch?v=PgiPcNRDcfI" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </div>
                        <div class="heading-title ml-5">
                            <span>Easy steps for renting a car</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
                <form action="#" class="request-form ftco-animate">
                    <h2>Check your order Status</h2>
                    <div class="form-group">
                        <label for="" class="label">Booking#</label>
                        <input type="text" class="form-control" placeholder="Please Enter Booking#">
                    </div>
                    <div class="d-flex">
                    <div class="form-group">
                        <input type="submit" onclick="myFunction()" value="Check Status" class="btn btn-primary py-3 px-4"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate mb-5">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Select Model</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Model</option>
                                                <option value="">Model 1</option>
                                                <option value="">Model 2</option>
                                                <option value="">Model 3</option>
                                                <option value="">Model 4</option>
                                                <option value="">Model 5</option>
                                                <option value="">Model 6</option>
                                                <option value="">Model 7</option>
                                                <option value="">Model 8</option>
                                                <option value="">Model 9</option>
                                                <option value="">Model 10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Select Brand</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Brand</option>
                                                <option value="">Brand 1</option>
                                                <option value="">Brand 2</option>
                                                <option value="">Brand 3</option>
                                                <option value="">Brand 4</option>
                                                <option value="">Brand 5</option>
                                                <option value="">Brand 6</option>
                                                <option value="">Brand 7</option>
                                                <option value="">Brand 8</option>
                                                <option value="">Brand 9</option>
                                                <option value="">Brand 10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Year Model</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Year Model</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                                <option value="">2017</option>
                                                <option value="">2016</option>
                                                <option value="">2015</option>
                                                <option value="">2014</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Price Limit</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">$1</option>
                                                <option value="">$50</option>
                                                <option value="">$100</option>
                                                <option value="">$200</option>
                                                <option value="">$300</option>
                                                <option value="">$400</option>
                                                <option value="">$500</option>
                                                <option value="">$600</option>
                                                <option value="">$700</option>
                                                <option value="">$800</option>
                                                <option value="">$900</option>
                                                <option value="">$1000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Our Services</span>
                <h2 class="mb-2">Our Services</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon"><span class="flaticon-customer-support"></span></div>
                            <h3 class="heading mb-0 pl-3">UpGrade</h3>
                        </div>
                        <p>We can help you upgrade your Gaming Station</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon"><span class="flaticon-route"></span></div>
                            <h3 class="heading mb-0 pl-3">Online Booking</h3>
                        </div>
                        <p>Select your Dream Gaming Station and Order it online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon"><span class="flaticon-online-booking"></span></div>
                            <h3 class="heading mb-0 pl-3">Customization</h3>
                        </div>
                        <p>Option to Customize the PC according your choice</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon"><span class="flaticon-rent"></span></div>
                            <h3 class="heading mb-0 pl-3">Rental Consoles</h3>
                        </div>
                        <p>Rent the Consoles for any Gaming Event</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Choose Your PC</h2>
            </div>
        </div>
        <div class="row">
            @foreach($pcs as $pc)
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div> <img src="{{ asset('upload/image/' . $pc->image) }}" class="img d-flex align-items-end">

                            <div class="price-wrap d-flex">
                                <span class="rate">${{$pc->price}}</span>
                                <p class="from-day">
                                    <span>BM</span>
                                    <span>Global</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">{{$pc->pc_model}}</a></h2>
                            <span>Gaming System</span>
                            <p class="d-flex mb-0 d-block"><a href="{{route('Price.addToCart', ['id' => $pc->id])}}" class="btn btn-black btn-outline-black mr-1">Add to Cart</a> <a href="{{route('view',$pc->id)}}" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section services-section img" style="background-image: url(images/hero_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Make your choice</span>
                <h2 class="mb-3">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                        <h3>Choose the series</h3>
                        <p>We offer many series of Gaming PC. Choose the series according your style</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                        <h3>Select Model</h3>
                        <p>Choose the Model according your need and specifications</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                        <h3>Customization</h3>
                        <p>Let us know if you want any extra customizations in the PC</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                        <h3>Make it your's</h3>
                        <p>Order and it will be delivered in the given time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="">Top Picks</span>
                <h2 class="mb-3">Best we offer</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/FS1ANOG_188874_750x750.jpg)">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Windows 10 Home
                                    Intel® Core™ Processor i7-9700K
                                    GeForce® RTX 2070 SUPER™ 8GB GDDR6
                                    16GB DDR4/3200MHz RAM
                                    ASUS Prime Z390-P WiFi ATX Motherboard
                                    1TB ADATA 6000LNP M.2 NVME SSD + 4TB HDD Combo
                                    NZXT H510 Mid-Tower Gaming Case</p>
                                <p class="name">Gaming Infinity</p>
                                <span class="position">8800 PX</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/FS106OG_196018_750x750.jpg)">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Windows 10 Home
                                    Intel® Core™ Processor i7-9700K
                                    GeForce® RTX 2060 SUPER™ 8GB GDDR6
                                    16GB DDR4/3200MHz RAM
                                    ASUS Prime Z390-P WiFi ATX Motherboard
                                    240GB ADATA SU630-240G SSD + 1TB HDD Combo
                                    CyberPowerPC ELUNA 242V Premium Gaming</p>
                                <p class="name">Gaming Infinity</p>
                                <span class="position">8000 PRO</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/img_8374.jpg)">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Windows 10 Home
                                    Intel® Core™ Processor i7-9700KF
                                    AMD Radeon™ RX 5700 XT 8GB Graphics
                                    16GB DDR4/3200MHz RAM
                                    ASUS Prime Z390-P WiFi ATX Motherboard
                                    512GB ADATA 6000LNP M.2 NVME SSD + 3TB HDD Combo
                                    CyberPowerPC FURION Gaming Case</p>
                                <p class="name">Inifnity Monster</p>
                                <span class="position">Z1020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                <div class="heading-section mb-5 pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Gaming Desktop in Pakistan</h2>

                    <p>Buying a desktop regardless of age is an extremely daunting task. With countless brands to choose from, there is a lot one needs to get acquainted with before they could easily buy a Desktop Computer. Things get particularly daunting when one is shopping for a Computer For Gaming. Therefore, I have tried to cover the dos and don’ts while shopping for a Gaming PC that will help you enjoy your game to the fullest without being overly costly.</p>

                    <p><a href="#" class="btn btn-primary">Search Gaming System</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<br></br>
    <br></br>
    <br></br>

@endsection

