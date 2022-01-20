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

     <div class="heading">
        <h2>Report</h2>
      </div>

      <br>
      <br>
<form action="{{route('admin.report')}}" method="GET">
<div class="row d-flex justify-content-around" >
    <div class="col-md-4">
        <label for="">From Date</label>
        <input value="" type="date" placeholder="Search" name="from_date" class="form-control"> 
    </div>

    <div class="col-md-4">
        <label for="">To Date</label>
        <input value="" type="date" placeholder="Search" name="to_date" class="form-control"> 
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>
  </form>
    <br>
 
    <table id="customers">
      <tr>
        <th>ID</th>
        <th>id</th>
        <th>Name</th>
        
    
      </tr>
 
      <tr>
        <td>hello</td>
        <td>
            helloo
        </td>

        <td>hello</td>
        
       
      </tr>
   
     
    
    </table>
        
    @endsection









