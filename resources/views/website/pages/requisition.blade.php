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

  <body>
  <div class="heading">
    <h2>My Requisition</h2>
  </div>
  
  <br>
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Total Amount</th>
      <th>Action</th>

    </tr>
    @foreach ($requisitions as $key=> $requisitionall)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$requisitionall->date}}</td>
      <td>{{$requisitionall->total_price}}</td>
      <td>
        <a class="btn" href="{{route('website.requisitiondetails.view',$requisitionall->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20" width="22" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg> </a>
      </td>
    </tr>
    @endforeach
    {{-- @foreach ($requisitions as $key=>$requisition)

        <tr>
          <td>{{$key+1}}</td>
          <td>{{$requisition->details->product->product_name}}</td>
          <td>{{$requisition->product_quantity}}</td>
          <td>{{$requisition->product_price}}</td>
          <td>{{$requisition->subtotal}}</td>
          <td>{{$requisition->status}}</td>
        </tr>    
        @endforeach  --}}
  </table>
  <body>

@endsection 