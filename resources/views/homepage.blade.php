@extends('layouts.app')
@section('content')
<div class="p-2" >
    <div class="row" style="width:100%">
        @foreach( $products as $product)
        <div class="col-3 p-2">
            <div class="card bg-white p-3 border-0">
                <img src="{{ asset('storage/'.$product->product_pict)}}" class="img-fluid">
                <h5 class="fw-light mt-3"> {{$product->product_name}} </h5>
                <div class="d-flex">
                    <h5 class="mb-0 fw-bold flex-grow-1 ">Rp. {{$product->price}}</h5>
                    <h6 class="mb-0 fw-lighter">Stok : {{$product->stock}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection