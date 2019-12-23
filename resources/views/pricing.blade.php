@extends('main')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/pricing.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">PC Rates Pricing</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="car-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th class="bg-dark heading">System's Price</th>
                        </tr>
                        </thead>
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div><br />
                        @endif

                        <tbody>
                        @foreach($pcs as $pc)
                        <tr class="">



                                <td class="car-image"><img src="{{ asset('upload/image/' . $pc->image) }}" class="img"></td>
                            <td class="product-name">
                                <h3>{{$pc->pc_model}}</h3>
                            </td>
                            <td class="price">
                                <p class="btn-custom"><a href="{{route('view',$pc->id)}}">Details</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small>{{$pc->price}}</span>
                                        <span class="per">{{$pc->pc_generation}}</span>
                                    </h3>
                                    <span class="subheading">{{$pc->pc_windows}}</span>
                            </td>


                        </tr><!-- END TR-->
                        @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

