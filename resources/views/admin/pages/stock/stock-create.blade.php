@extends('master')

@section('content')
<style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  div {
    border-radius: 5px;
    padding:5px;
  }
  </style>

  <br>
  @if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif
  <body>
    <h2>Add Stock From Here!</h2>
  
  <div>
    <form action="{{route('admin.stock.store')}}"method='POST' enctype="multipart/form-data">
      @csrf
      <label for="formFileLg" class="form-label">Stock Category Image</label>
      <input class="form-control form-control-lg"  name="stock_image" id="formFileLg" type="file" />
      <br>
       <label for="stock">Stock Item</label>
      <select id="stock" name="stock_iteam">
        @foreach ($products as $item)
        <option value="{{$item->id}}">{{$item->product_name}}</option>
        @endforeach
      </select>
      <label for="lname"> Stock Quantity</label>
      <input type="number" id="lname" name="stock_quantity" placeholder="stock quantity..">
      <input type="submit" value="Save">
    </form>
  </div>
  </body>
@endsection