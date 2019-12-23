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

    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->name }}</strong>
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    @else
        <script>windows.location="/main";</script>
    @endif



    <style>
        .uper {
            margin-top: 40px;
        }


    </style>
    <div class="uper">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>PC Model</td>
                <td>PC Windows</td>
                <td>PC Generation</td>
                <td>PC Graphics</td>
                <td>PC Core, Generation & Processor</td>
                <td>PC Hard, SSD & Ram</td>
                <td>PC Optical Drive, USB Type & HDMI</td>
                <td>PC DisplayPort, DVD Type, Wifi & Bluetooth</td>
                <td>PC VR Type & Port</td>
                <td>PC LED Type</td>
                <td>PC Price</td>
                <td>PC Image</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pcs as $pc)
                <tr>
                    <td>{{$pc->id}}</td>
                    <td>{{$pc->pc_model}}</td>
                    <td>{{$pc->pc_windows}}</td>
                    <td>{{$pc->pc_generation}}</td>
                    <td>{{$pc->pc_graphics}}</td>
                    <td>{{$pc->pc_core}}</td>
                    <td>{{$pc->pc_hard}}</td>
                    <td>{{$pc->pc_optical}}</td>
                    <td>{{$pc->pc_display}}</td>
                    <td>{{$pc->pc_vr}}</td>
                    <td>{{$pc->pc_led}}</td>
                    <td>{{$pc->price}}</td>
                    <td><img src="{{ asset('upload/image/' . $pc->image) }}" width="100px" height="100px"></td>
                    <td><a href="/editimage/{{ $pc->id }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('pcs.destroy', $pc->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection

