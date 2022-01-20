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
      background-color:#006666;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color:#006666;
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

  <form action="{{route('admin.product.update',$product->id)}}"method='POST' enctype="multipart/form-data">
  @csrf {{-- cross-site request forgery  --}} 
  @method('PATCH')
  
  <label for="formFileLg" class="form-label"> Product Category Image</label>
  <input class="form-control form-control-lg"  name="product_image" id="formFileLg" type="file" />
  <div class="form-group">
    <label for="exampleInputPassword1">Product Name</label>
    <input name="product_name" type="text" class="form-control" value="{{$product->product_name}}" id="text" placeholder="Enter product name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input name="product_price" type="text" class="form-control" value="{{$product->product_price}}" id="text" placeholder="Enter product price"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dealer Price</label>
    <input name="dealer_price" type="text" class="form-control" value="{{$product->dealer_price}}" id="text" placeholder="Enter dealer product price"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Details</label>
    <input name="product_details" type="text" class="form-control" value="{{$product->product_details}}" id="text" placeholder="Enter product details"required>
  </div>
  <div class="form-group">
  <select value="{{$product->product_category}}" id="category" name="product_category">
    <option selected> Category Name </option>
    @foreach ($prodlist as $item)
    <option value="{{$item->id}}">{{$item->category_name}}</option>   
    @endforeach

  </select>
  </div>
  <button type="submit" class="btn btn-primary">Add Product</button>

</form>
@endsection