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

  <a class="btn btn-primary" href="{{route('admin.stock.create')}}" role="button">Add</a>
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Requisition ID</th>
      <th>Item ID</th>
      <th>Item Price</th>
      <th>Item Quatity</th>
      <th>Item Subtotal</th>
      <th>Action</th>
  
    </tr>
    <tr>
      <td>1</td>
      <td>Maria Anders</td>
      <td>300</td>
      <td>1</td>
      <td>Maria Anders</td>
      <td>300</td>
      <td>
        <a class="btn btn-danger" href="">delete</a>
        <a class="btn btn-info" href="">edit</a>
    </td>
    </tr>
</table>
@endsection 