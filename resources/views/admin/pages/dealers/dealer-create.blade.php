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
  <body>
    <h2>Add Dealer Information!</h2>
  
  <div>
    <form action="/action_page.php">
      <label for="formFileLg" class="form-label">Dealer Image</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file" />
      <label for="lname">Dealer Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Enter Dealer name..">

      <label for="lname">Dealer Address</label>
      <input type="text" id="lname" name="lastname" placeholder="Enter Dealer address..">

      <label for="lname">Dealership Code</label>
      <input type="text" id="lname" name="lastname" placeholder="Enter Dealership code..">


  
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>

@endsection