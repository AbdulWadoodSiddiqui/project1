@extends('layout')
@section('content')

    <h1>CheckOut</h1>
    <h4>Your Total: ${{ $total }}</h4>

    <form method="post" action="{{ route('checkout') }}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label for="price">Address :</label>
            <input type="text" class="form-control" name="address"/>
        </div>
        <div class="form-group">
            <label for="quantity">Card Holder Name :</label>
            <input type="text" class="form-control" name="card-name"/>
        </div>
        <div class="form-group">
            <label for="quantity">Credit Card Number :</label>
            <input type="text" class="form-control" name="card-number"/>
        </div>
        <div class="form-group">
            <label for="quantity">Expiration Year :</label>
            <input type="text" class="form-control" name="card-expiry-year"/>
        </div>

        <button type="submit" name="image" class="btn btn-primary">CheckOut</button>
    </form>

    @endsection
