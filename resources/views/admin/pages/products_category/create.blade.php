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
<body>
  <h2>Create Product Category From Here!</h2>

<div>
  <form action="{{route('admin.product_category.store')}}"method='POST' enctype="multipart/form-data">
    @csrf 
    <label for="formFileLg" class="form-label">Product Category Image</label>
<input class="form-control form-control-lg" id="formFileLg"  name="image" type="file" />
    <br>
    
     <label for="category">Product Category Name</label>
    <select id="category" name="category_name">
      <option value="Organic Fertilizer">Organic Fertilizer</option>
      <option value="Nitrogen Fertilizer">Nitrogen Fertilizer</option>
      <option value="Compound Fertilizer">Compound Fertilizer</option>
      <option value="Phosphate Fertilizer">Phosphate Fertilizer</option>
      <option value="Potassium Fertilizer">Potassium Fertilizer</option>
      <option value="Others Fertilizer">Others Fertilizer</option>
      
    </select>

    <label for="lname">Details</label>
    <input type="text" id="lname" name="details" placeholder="Product details..">

    <input type="submit" value="Submit">
  </form>
</div>
</body>


@endsection