@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Book
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="/updateimage/{{ $pc->id }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    {{ method_field('PUT') }}
                    <label for="name">PC Model :</label>
                    <input type="text" class="form-control" name="pc_model" value="{{$pc->pc_model}}"/>
                </div>
                <div class="form-group">
                    <label for="price">PC Windows :</label>
                    <input type="text" class="form-control" name="pc_windows" value="{{$pc->pc_windows}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Generation :</label>
                    <input type="text" class="form-control" name="pc_generation" value="{{$pc->pc_generation}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Graphics :</label>
                    <input type="text" class="form-control" name="pc_graphics" value="{{$pc->pc_graphics}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Core & Processor :</label>
                    <input type="text" class="form-control" name="pc_core" value="{{$pc->pc_core}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Hard, SSD & Ram:</label>
                    <input type="text" class="form-control" name="pc_hard" value="{{$pc->pc_hard}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Optical Drive, USB Type & HDMI :</label>
                    <input type="text" class="form-control" name="pc_optical" value="{{$pc->pc_optical}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Display, DVD Type, Wifi & Bluetooth Type :</label>
                    <input type="text" class="form-control" name="pc_display" value="{{$pc->pc_display}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC VR Type & Port :</label>
                    <input type="text" class="form-control" name="pc_vr" {{$pc->pc_vr}}/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC LED Type :</label>
                    <input type="text" class="form-control" name="pc_led" value="{{$pc->pc_led}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Price :</label>
                    <input type="text" class="form-control" name="price" value="{{$pc->price}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">PC Price :</label>
                    <input type="file" class="form-control" name="image" value="{{$pc->image}}"/>
                </div>
                <button type="submit" name="image" class="btn btn-primary">Update PC</button>
            </form>
        </div>
    </div>
@endsection
