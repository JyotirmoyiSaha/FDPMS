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
      background-color: #006666;
      color: white;
    }
   </style>

    @if(session()->has('success'))
      <p class="alert alert-success">
       {{session()->get('success')}}
      </p>
     @endif


     {{-- searching --}}
<form action="{{route('admin.user.list')}}" method="GET">
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
      Searching for: {{$key}}.found:{{$users->count()}}
  </h6>
@endif
{{-- end searching --}}


    <div class="heading">
      <h2>Users List</h2>
    </div>
    
    <br>
    {{-- <a class="btn btn-primary" href="{{route('admin.user.create')}}" role="button">Add</a> --}}
    <table id="customers">
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
        <th>User type</th>
        <th>Action</th>
    
      </tr>
      @foreach ($users as $key=>$user)
      <tr>
        <td>{{$key+1}}</td>
        <td>
          <img width="100px" src="{{url('/uploads/'.$user->image)}}" alt="">
        </td>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->mobile}}</td>
        <td>{{$user->type}}</td>
        <td>
          <a class="btn btn-info" href="{{route('admin.user.details',$user->id)}}">View</a>
          <a class="btn btn-danger" href="{{route('admin.user.delete',$user->id)}}">Delete</a>
          
      </td>
      </tr>
      @endforeach
     
    
    </table>
        
    @endsection