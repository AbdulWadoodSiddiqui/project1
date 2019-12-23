@extends('main')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/gaming.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choose Your Car</h1>
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

@endsection
