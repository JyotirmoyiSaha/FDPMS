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
     }
     .left{
         text-align: left;
         margin-left: 39%;
     }
    </style>
</head>

<body>
  
    <h1>Product Details</h1>
      <div class="row">
          <div class="col-md-6">

        
                <p>
                    <img src="{{url('uploads/'.$products->product_image)}}" width="300px" height="200px" alt="ProductImage">
                </p>
                <div class="left">
                <p>Product Name: {{$products->product_name}}</p>
                <p>Product Price: <h4><span style="color: orange">BDT {{$products->product_price}}</span></h4></p>
                <p>Product Details: {{$products->product_details}}</p>
                <p>Product Category: {{$products->product_category->category_name}}</p>
                </div>
            </div>
              
        </div>
            
</body>
</html>



