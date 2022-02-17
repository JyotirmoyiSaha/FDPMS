@extends('master')

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
   /* button design */
   .btn {
  background-color: rgb(131, 157, 235);
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
    <h2>Requisition Table</h2>
  </div>
  <br>
  
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>User Name</th>
      {{-- <th>Date</th> --}}
      <th>Total Amount</th>
      <th>Action</th>

    </tr>
    @foreach ($requisitionlists as $key=> $requisitionlist)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$requisitionlist->user->name}}</td>
      {{-- <td>{{$requisitionlist->date}}</td> --}}
      <td>{{$requisitionlist->total_price}}</td>
      <td>
        <a class="btn" href="{{route('admin.requisition.details', $requisitionlist->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20" width="22" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg> </a>
      </td>
    </tr>
    @endforeach
</table>
@endsection 