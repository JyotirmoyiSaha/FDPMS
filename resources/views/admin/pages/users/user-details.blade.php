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
         background: linear-gradient(to left, #D7EDE1 45%, #0167a1 95%);
     }
     .left{
         text-align: left;
         margin-left: 39%;
     }
    </style>
</head>

<body>
  
    <h1>User Details</h1>
      <div class="row">
          <div class="col-md-6">

        
                <p>
                    <img src="{{url('uploads/'.$users->image)}}" width="300px" height="200px" alt="UserImage">
                </p>
                <div class="left">
                <p>Product Name:{{$users->name}}</p>
                <p>Product Details:{{$users->email}}</p>
                <p>Product Category: {{$users->address}}</p>
                <p>Product Category: {{$users->mobile}}</p>
                <p>Product Category: {{$users->type}}</p>
                </div>
            </div>
              
        </div>
            
</body>
</html>



