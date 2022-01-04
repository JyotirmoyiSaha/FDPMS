@extends('master')

@section('content')


<style>
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
     background-color: #04AA6D;
     color: white;
   }
</style>
<br>
<div class="heading">
  <h2> Dealer Stock List</h2>
</div>

<br>
<a class="btn btn-primary" href="{{route('admin.dealerstock.create')}}" role="button">Add</a>
<body>
<table id="customers">
  <thead>
    <tr>
      <th>#ID</th>
      <th>Stock Item</th>
      <th>Quantity</th>
  
    </tr>  
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>jjj</td>
      <td>12</td>
    
    </tr>     
  </tbody>
</table>
</body>
@endsection