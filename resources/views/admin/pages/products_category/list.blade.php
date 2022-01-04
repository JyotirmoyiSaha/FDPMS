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
  

{{-- searching --}}
{{-- <form action="{{route('admin.product_category.prolist')}}" method="GET">
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
      Searching for: {{$key}}.found:{{$prodList->count()}}
  </h6>
@endif --}}
{{-- end searching --}}



  <br>
  <div class="heading">
    <h2>Product Category List</h2>
  </div>
  
  <br>
<a class="btn btn-primary" href="{{route('admin.product_category.procreate')}}" role="button">Add</a>

<table id="customers">
  <tr>
    <th>Category ID</th>
    <th>Category Image</th>
    <th>Category Name</th>
    <th>Category Details</th>
    <th>Action</th>

  </tr>
  <tbody>
    @foreach($prodlist as $key=>$prodlist)
    <tr>
      <td>{{$key+1}}</td>
      <td>
        <img width="100px" src="{{url('/uploads/'.$prodlist->image)}}" alt="">
      </td>
      <td>{{$prodlist->category_name}}</td>
      <td>{{$prodlist->details}}</td>
      <td>
        <a class="btn btn-info" href="{{route('admin.product_category.details',$prodlist->id)}}">View</a>
        <a class="btn btn-Sucess" href="">Edit</a>
        <a class="btn btn-danger" href="{{route('admin.product_category.delete', $prodlist->id)}}">Delete</a>
        
      </td>
    </tr>    
  
    @endforeach  
  </tbody>

</table>
@endsection 