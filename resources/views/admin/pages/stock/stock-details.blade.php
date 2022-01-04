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
  
    <h1>Stock Details</h1>
      <div class="row">
          <div class="col-md-6">
                <div class="left">
                <p>Product Details: {{$stock->stock_details}}</p>
                <p>Product Category: {{$stock->stock_item->category_name}}</p>
                </div>
            </div>
              
        </div>
            
</body>
</html>
