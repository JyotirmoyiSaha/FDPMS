@extends('master')

@section('content')

<style>
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

  @if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

  <div class="heading">
    <h2>Requisition Detalis</h2>
  </div>
  
  <br>
  @if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

  
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Requisition ID</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Product Subtotal</th>
      <th>Status</th>
  
    </tr>
    <tr>

      @foreach ($requisitiondetails as $key=>$requisitiondetail)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$requisitiondetail->requisition_id}}</td>
      <td>{{$requisitiondetail->product->product_name}}</td>
      <td>{{$requisitiondetail->product_quantity}}</td>
      <td>{{$requisitiondetail->product_price}}</td>
      <td>{{$requisitiondetail->product_quantity * $requisitiondetail->product_price}} .BDT</td>
      <td>
        @if($requisitiondetail->status=='Pending')
       <form action="{{route('action',$requisitiondetail->id)}}", method="POST">
         @csrf
         <button class="btn btn-info" type="submit" name="action" value="Approve">Aprove</button>
       </form>
       @else
       <button type="button" class="btn btn-success">Confirmed</button>
       @endif
     </td> 
    </tr>    
    @endforeach
</table>
@endsection 