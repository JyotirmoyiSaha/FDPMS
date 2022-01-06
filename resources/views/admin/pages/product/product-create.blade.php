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
  </style>

{{-- searching --}}
<form action="{{route('admin.product.create')}}" method="GET">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-6">
          <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
      </div>
      <div class="col-md-2">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
  </div>
  </form>
  @if($key)
  <h6>
      Searching for: {{$key}}.found:{{$products->count()}}
  </h6>
@endif
{{-- end searching --}}

  <div class="heading">
    <h2>Product List</h2>
  </div>
  <a class="btn btn-primary" href="{{route('admin.product.list')}}" role="button">Add Product</a> 
  <table id="customers">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr> 
    </thead>
 
  <tbody>
    @foreach($products as $key=>$product)
    <tr>
      <td>{{$key+1}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$product->product_image)}}" alt="">
      </td>
      <td>{{$product->product_name}}</td>
      <td>{{$product->product_price}}</td>
      <td>{{$product->product_details}}</td>
      <td>{{$product->product_category->category_name}}</td>
      <td>
        <a class="btn btn-info" href="{{route('admin.product.details',$product->id)}}">Veiw</a>
        <a class="btn btn-Success" href="">Edit</a>
        <a class="btn btn-danger" href="{{route('admin.product.delete',$product->id)}}">Delete</a>
        
      </td>
    </tr>    
  
    @endforeach  
  </tbody>
</table>
@endsection 