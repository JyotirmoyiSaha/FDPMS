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
        <a class="btn btn-danger" href="">delete</a>
        <a class="btn btn-info" href="">edit</a>
      </td>
    </tr>    
  
    @endforeach  
  </tbody>
  {{-- <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>
      <a class="btn btn-danger" href="">delete</a>
      <a class="btn btn-info" href="">edit</a>

    </td>
  </tr> --}}

</table>
@endsection 