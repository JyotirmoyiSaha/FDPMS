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
  background-color: #04AA6D;
  color: white;
}
</style>
<br>
<div class="heading">
  <h2>Stock List</h2>
</div>

<br>
<a class="btn btn-primary" href="{{route('admin.stock.create')}}" role="button">Add</a>
<body>
<table id="customers">
  <thead>
    <tr>
      <th>Stock ID</th>
      <th>Product Image</th>
      <th>Product Category</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Action</th>
  
    </tr>  
  </thead>
  <tbody>
    @foreach ($stocks as $key=>$stock)
    <tr>
      <td>{{$key+1}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$stock->product_image)}}" alt="">
      </td>
      <td>{{$stock->product_category}}</td>
      <td>{{$stock->product_name}}</td>
      <td>{{$stock->product_quantity}}</td>
      <td>
        <a class="btn btn-danger" href="">delete</a>
        <a class="btn btn-info" href="">edit</a>

      </td>




    </tr>    
    @endforeach
    
  </tbody>
  


</table>

</body>
@endsection