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
    <h2>Requisition</h2>
  </div>
  
  <br>
  <table id="customers">
    <tr>
      <th> ID</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Subtotal</th>
    </tr>
    
    <tr>
      <td> hello</td>
      <td> hello</td>
      <td> hello</td>
      <td> hello</td>
      <td> hello</td>
    </tr>  
  </table>
  <body>

@endsection 