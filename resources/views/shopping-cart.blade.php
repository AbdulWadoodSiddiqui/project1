@extends('main')
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('images/item.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span><span><a href="">Store</a><i class="ion-ios-arrow-forward"></i></span> <span>Item details <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Shopping Cart </h1><h1></h1>
                </div>
            </div>
        </div>
    </section>

    <br></br>

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" >
                <ul class="list-group">
                    @foreach($pcs as $pc)
                        <li class="list-group-item">
                            <span class="badge">{{ $pc['qty'] }}</span>
                            <strong>{{ $pc['item']['pc_model'] }}</strong>
                            <span class="label label-success">{{ $pc['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs.dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span> </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('Price.reduceByOne', ['id'=>$pc['item']['id']]) }}">Reduce by 1</a> </li>
                                    <li><a href="{{ route('Price.remove', ['id'=>$pc['item']['id']]) }}">Reduce by All</a> </li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href=" {{route('checkout')}}" type="button" class="btn btn-success">CheckOut</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart</h2>
            </div>
        </div>

    @endif

@endsection
