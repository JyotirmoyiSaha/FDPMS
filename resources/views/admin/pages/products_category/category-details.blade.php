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
  
    <h1>Product Category Details</h1>
      <div class="row">
          <div class="col-md-6">
        
            <p>
                <img src="{{url('uploads/'.$prodlist->image)}}" width="300px" height="200px" alt="ProductImage">
            </p>
            <div class="left">
            <p>Product Category:{{$prodlist->category_name}}</p>
            <p>Product Details: {{$prodlist->details}}</p>
            </div>

          </div>
              
        </div>
            
</body>
</html>



