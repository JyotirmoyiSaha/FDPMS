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
      background-color: #006666;
      color: white;
    }
    </style>
    <br>
    <div class="heading">
      <h2>Dealer List</h2>
    </div>
    
    <br>
    <a class="btn btn-primary" href="{{route('admin.dealer.create')}}" role="button">Add</a>
    <table id="customers">
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>District</th>
        <th>Address</th>
        <th>Dealership Code</th>
        <th>Contact</th>
        <th>Action</th>
    
      </tr>
      <tr>
        <td>1</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Alfreds</td>
        <td>Maria Anders</td>
        <td>Alfreds </td>
        <td>Futterkiste</td>
        <td>
          <a class="btn btn-danger" href="">delete</a>
          <a class="btn btn-info" href="">edit</a>
      </td>
      </tr>
    
    </table>
    
@endsection