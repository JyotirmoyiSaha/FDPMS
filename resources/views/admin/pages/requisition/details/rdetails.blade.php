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
  <div class="heading">
    <h2>Requisition Detalis</h2>
  </div>
  
  <br>

  
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Requisition ID</th>
      <th>Item ID</th>
      <th>Item Name</th>
      <th>Item Price</th>
      <th>Item Quatity</th>
      <th>Item Subtotal</th>
      <th>Action</th>
  
    </tr>
    <tr>

      @foreach ($requisitiondetails as $key=>$requisitiondetail)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$requisitiondetail->user_id}}</td>
      <td>{{$requisitiondetail->item_id}}</td>
      <td>{{$requisitiondetail->item_name}}</td>
      <<td>{{$requisitiondetail->item_price}}</td>
      <td>{{$requisitiondetail->item_quantity}}</td>
      <td>{{$requisitiondetail->item_subtotal}}</td>
      <td>
        <form action="{{route('action',$requisitiondetail->id)}}", method="POST">
          @csrf
          <button class="btn btn-info" type="submit" name="action" value="Approve">Aprove</button>
        </form>
        <a class="btn btn-danger" href="">Deny</a>
      </td>
    </tr>    
    @endforeach
</table>
@endsection 