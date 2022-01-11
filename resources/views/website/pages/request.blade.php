{{-- @extends('website.master')

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
     
     <form action="{{route('website.request.store', $products->id)}}" method="POST">
        @csrf
      <label for="lname"> Quantity</label>
      <input type="number" id="lname" name="quantity" placeholder=" quantity..">
      <input type="submit" value="Save">
    </form>
  </div>
  </body>
@endsection --}}