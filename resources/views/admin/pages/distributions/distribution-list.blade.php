@extends('master')

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
    <h2>Distribution Table</h2>
  </div>
  
  <br>

  {{-- <a class="btn btn-primary" href="{{route('admin.distribution.create')}}" role="button">Distribute</a> --}}
  <table id="customers">
    <thead>
    <tr>
      <th>ID</th>
      <th>Requisition ID</th>
      <th>Product ID</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Subtotal</th>
      {{-- <th>Distribution Location</th> --}}
    </tr>
    <thead>
    <tbody>
        @foreach ($distributions as $key=>$distribution)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$distribution->requisition_id}}</td>
          <td>{{$distribution->product->product_name}}</td>
          <td>{{$distribution->product_quantity}}  KG</td>
          <td>{{$distribution->product_price}} .BDT</td>
          <td>{{$distribution->subtotal}} .BDT</td>
          {{-- <td>{{$distribution->user->address}}</td> --}}
        </tr>    
        @endforeach
        
      </tbody>
</table>
@endsection 