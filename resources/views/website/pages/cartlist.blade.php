@extends('website.master')

@section('content')

<style>
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
  </style>
  <br>
  <div class="heading">
    <h2>Cart List</h2>
  </div>
  
  <br>
  <table id="customers">
    <tr>
      <th> ID</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th> Product Price</th>
      <th>Subtotal</th>
    </tr>
    @foreach($cartlists as $key=>$cartlist)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$cartlist->product_name}}</td>
      <td>{{$cartlist->product_quantity}}</td>
      <td>{{$cartlist->product_price}}</td>
      <td>{{$cartlist->product_price*$cartlist->product_quantity}}</td>
    </tr>
    @endforeach
  </table>
<a class="btn btn-primary" href="{{route('website.cartconfirm',$cartlists->first()->user_id??0)}}" role="button">Confirm</a>
@endsection 