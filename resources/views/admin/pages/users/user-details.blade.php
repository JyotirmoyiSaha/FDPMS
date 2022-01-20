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
  
    <h1>User Details</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{url('uploads/'.$users->image)}}" width="300px" height="200px" class="card-img-top" alt="UserImage" >
        <div class="card-body">
          <h5 class="card-title">User Name:{{$users->name}}</h5>
          <p class="card-text">Email: {{$users->email}}</p>
          <p class="card-text">Address: {{$users->address}}</p>
          <p class="card-text">Contact:  {{$users->mobile}}</p>
          <p class="card-text">User type:<span style="color: orange">{{$users->role}}</span></p>
 
        </div>
      </div>







      {{-- <div class="row">
          <div class="col-md-6">

        
                <p>
                    <img src="{{url('uploads/'.$users->image)}}" width="300px" height="200px" alt="UserImage">
                </p>
                <div class="left">
                <p>User Name:{{$users->name}}</p>
                <p>Product Details:{{$users->email}}</p>
                <p>Product Category: {{$users->address}}</p>
                <p>Product Category: {{$users->mobile}}</p>
                <p>Product Category: {{$users->type}}</p>
                </div>
            </div>
              
        </div>
             --}}
</body>
</html>



