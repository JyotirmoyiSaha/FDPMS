<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Fertilizer Distriutor Plan Management System </title>
      <!-- Bootstrap core CSS -->
      <link href="/css/website/bootstrap.min.css" rel="stylesheet">
      <!-- Fontawesome CSS -->
      <link href="/css/website/all.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="/css/website/style.css" rel="stylesheet">
   </head>

<body>
    <!-- Navigation -->
    @include('website.fixed.header')
    
    <div style="padding-top:40px;">
        @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
    
    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif
    </div>
   

    <!-- Page Content -->


    <div class="container">
        
    @yield('content')

    </div> 
    <!-- /.container -->


    <!--footer starts from here-->
    @include('website.fixed.footer')

    
	  
<!-- Bootstrap core JavaScript -->
<script src="{{url('/js/website/jquery.min.js')}}"></script>
<script src="{{url('js/website/bootstrap.bundle.min.js')}}"></script>
</body>
</html>