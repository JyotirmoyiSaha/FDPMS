@extends('website.master')

@section('content')

<style>
  /* requisition form */
    body{
     
       background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
    }
     #customers {
       font-family: Arial, Helvetica, sans-serif;
       border-collapse: collapse;
       width: 100%;
     }
     .heading h2{
       text-align: center;
     }
     #customers td, #customers th {
       border: 1px solid #ddd;
       padding: 8px;
     }
     
     #customers tr:nth-child(even){background-color: #ccccff;}
     
     #customers tr:hover {background-color: #ddd;}
     
     #customers th {
       padding-top: 12px;
       padding-bottom: 12px;
       text-align: left;
       background-color: rgb(9, 24, 68);
       color: white;
     }
      /* button design */
      .btn {
     background-color: rgb(131, 157, 235);
     border: none;
     color: white;
     padding: 12px 16px;
     font-size: 16px;
     cursor: pointer;
   }
   
   /* Darker background on mouse-over */
   .btn:hover {
     background-color: rgb(5, 31, 109);
   }
   
  
     input[type=text], select {
       width: 100%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       border-radius: 4px;
       box-sizing: border-box;
     }
     
     input[type=submit] {
       width: 100%;
       background-color: #4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border: none;
       border-radius: 4px;
       cursor: pointer;
     }
     
     input[type=submit]:hover {
       background-color: #45a049;
     }
     
     div {
       border-radius: 5px;
       padding:5px;
     }

     /* requisition form end */
   


  /* cartlist */
  body {
  display: grid;
 
  height:100vh;
  background: #7f7fd5;
  background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
}
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  .heading h2{
    text-align: center;
  }
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #e4e3e3;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:#009999;
    color: white;
  }
   /* cartlist */
  </style>
  
  {{-- requisition create form --}}
  <br>
  <br>

  <body>

    <h2>Requisite Product</h2>
  
    <form action="{{route('website.addToCart')}}" method="POST">
   
        @csrf
       <label for="product">Product Name</label>
        <select id="product" name="product_id">
          @foreach ($products as $item)
          <option value="{{$item->id}}">{{$item->product_name}}</option>
          @endforeach
        </select>
        <br><br>
        <label for="lname">Quantity</label>
        <input type="number" id="lname" name="quantity"  class="form-control" placeholder="requist quantity..">
        <br>
        <div class="form-group">
          <label for="formGroupExampleInput5">Date</label>
          <input name="date" type="date" class="form-control" id="formGroupExampleInput5" placeholder="Date">
      </div>
      <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>



   {{-- requisition create form end--}}
   {{-- cartlist --}}
 {{-- add to cart --}}
 @php 
 $carts=session('cart');
 $total=0;
 @endphp

  <div class="heading">
    <h2>Cart List</h2>
  </div>
  
  <br>
  <table id="customers">
    <tr>
      <th> ID</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Subtotal</th>
      <th>Action</th>
    </tr>
    @if(isset($carts))
    @if(!empty($carts))
    {{-- @dd($carts) --}}
    @foreach ($carts as $key=>$cart)
    <tr>
      <td> {{$key+1}} </td>
      <td>{{$cart['product_name']}}</td>
      <td>{{$cart['quantity']}}  KG</td>
      <td>{{$cart['product_price']}}  .BDT</td>
      <td>{{$cart['quantity']*$cart['product_price']}}  .BDT</td>
      <td> 
        <a class="btn btn-danger" href="{{route('cart.delete',$key)}}">Deny</a>
      </td>
      @php
          $total=$total+($cart['quantity']*$cart['product_price']);
      @endphp

    </tr>
        
    @endforeach
    @else
    no data found
    @endif
    <tr>
      <td></td></td>
      <td></td>
      <td colspan="2" class="text-center"><b>Total:</b></td>
      <td>{{$total}}</td>
      {{-- <td>
        {{-- @dd($carts) --}}
        {{-- <a class="btn btn-danger" href="">Deny</a>
      </td> --}}
    </tr>
    @endif
  </table>
  <input type="hidden" name="total" value="{{$total}}">
<a class="btn btn-primary" href="{{route('website.oderconfirm')}}" role="button">Confirm</a>
 {{-- cartlist end --}}
@endsection 