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
     background-color: rgb(9, 24, 68);
     color: white;
   }
   /* button design */
   .btn {
  background-color: rgb(9, 24, 68);
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
      <th>Action</th>
  
    </tr>  
  </thead>
  <tbody>
    @foreach ($dealerstocks as $key=>$dealerstock)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$dealerstock->dealerstock_item}}</td>
      <td>{{$dealerstock->dealerstock_quantity}}</td>
      <td>
        <a class="btn" href=""><i class="fa fa-view"></i> </a>
        <a class="btn" href=""><i class="fa fa-edit"></i> </a>
        <a class="btn" herf=""><i class="fa fa-trash"></i></a>
      </td>

    </tr>    
    @endforeach
    
  </tbody>
  
</table>
</body>
@endsection