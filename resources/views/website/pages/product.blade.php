@extends('website.master')
@section('content')

{{-- @dd($products) --}}



<div class="row">
   @foreach ($products as $product)
   <div class="col-lg-4 mb-4">
      <div class="card h-100" >
         <div class="header">
             <h3><b>Product Name:</b>{{$product->product_name}} </h3>
           </div>

         <div class="card-body">
           <p><img src="{{url('uploads/'.$product->product_image)}}" width="300px" height="200px" alt="ProductImage"></p>
            <h6>Product Price: {{$product->product_price}}</h6>
            <h6>Product Details: {{$product->product_details}}</h6>
         </div>
         {{-- <a class="btn btn-primary" href="{{route('website.request',$product->id)}}" role="button">Request</a> --}}
         
      </div>
       
       
    </div>
    @endforeach
    
@endsection