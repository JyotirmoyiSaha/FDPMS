<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
     body{
         text-align: center;
         align-content: center; 
         background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
         border-radius: 2px 2px 2px;

     }
     
     .card{
         text-align: left;
         margin-left: 39%;
         font-size: 20px;
     }
    </style>

</head>

<body>
  
    <h1>Product Details</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{url('uploads/'.$products->product_image)}}" width="300px" height="200px" class="card-img-top" alt="ProductImage" >
        <div class="card-body">
          <h5 class="card-title">Product Category: {{$products->product_category->category_name}}</h5>
          <p class="card-text">Product Name: {{$products->product_name}}</p>
          <p class="card-text">Product Price:<span style="color: orange">BDT {{$products->product_price}}</span></p>
          <p class="card-text">Product Details: {{$products->product_details}}</p>
 
        </div>
      </div>
      
      {{-- <div class="row">
          <div class="col-md-6">

        
                <p>
                    <img src="{{url('uploads/'.$products->product_image)}}" width="300px" height="200px" alt="ProductImage">
                </p>
                <div class="left">
                <p>Product Name: {{$products->product_name}}</p>
                <p>Product Price:<h4><span style="color: orange">BDT {{$products->product_price}}</span></h4></p>
                <p>Product Details: {{$products->product_details}}</p>
                <p>Product Category: {{$products->product_category->category_name}}</p>
                </div>
            </div>
              
        </div> --}}
            
</body>
</html>



