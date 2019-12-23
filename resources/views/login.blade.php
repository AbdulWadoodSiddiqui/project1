@extends('main')
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/contact.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Login</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">If you want to access Admin Portal <br> then please SignIn </h2>

                    @if(isset(Auth::user()->email))
                        <script>window.location="/successlogin";</script>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if(count($errors) >0 )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($erros->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/checklogin" method="post" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
