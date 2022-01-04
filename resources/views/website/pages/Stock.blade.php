@extends('website.master')
@section('content')

{{-- @dd($producs) --}}

{{-- <style>
   .header{
      text-align: center; 
   }
</style>

<div class="row">
    @foreach ($stocks as $key=>$stockitem)
        
  
    
    <div class="col-lg-4 mb-4">
       <div class="card h-100" >
          <div class="header">
              <h3>{{$stockitem->product_category}} </h3>
            </div>

          <div class="card-body">
            <p><img src="{{url('uploads/'.$stockitem->product_image)}}" width="300px" height="200px" alt="StockImage"></p>
             
             <h4><b>Stock Name:</b> {{$stockitem->product_name}}</h4>
             <h6>Stock Quantity: {{$stockitem->product_quantity}}</h6>
             <h6>Stock Details: {{$stockitem->product_details}}</h6>
          </div>
          <a class="btn btn-primary" href="#" role="button">View all</a>
          
       </div>
    </div> --}}
    @endforeach
@endsection