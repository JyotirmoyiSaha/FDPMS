<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo_06.png" alt="logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('website')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Servics</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

                        <a class="dropdown-item" href="{{route('website.product')}}">Organic Fertilizer</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.stock')}}">Stock</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Requisitions
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">Stock Iteam</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">Quatity</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>


                <li class="nav-item">

                    @if(auth()->user())
                    <!-- Button trigger modal -->

                    <a href="{{route('user.web.logout')}}" class="btn btn-success">{{auth()->user()->name}} | Logout</a>

                    @else

                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#registration">
                        Sign Up
                    </button>

                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#login">
                        Login
                    </button>

                    @endif

                </li>

            </ul>
        </div>
    </div>
</nav>






<!-- Registration Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.registration.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" input name="user_image" class="form-control-file"
                            id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter User Name:</label>
                        <input name="user_name" type="text" class="form-control" placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="user_email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="user_password" type="password" class="form-control"
                            placeholder="Enter user password">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Mobile:</label>
                        <input name="user_mobile" type="text" class="form-control" placeholder="Enter user mobile">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Address:</label>
                        <input name="user_address" type="text" class="form-control" placeholder="Enter user address">
                    </div>
                    <div class="form-group">
                        <label for="">User Type</label>
                        <input name="type" type="text" class="form-control" placeholder="Enter user address">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Registration</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--Login Modal-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{-- @csrf --}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                    {{-- <div class="dropdown">
                      <select name="type" id="">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                      </select>
                      
                    </ul> --}}
                    <div class="from-group">
                        <button type="submit" class="btn btn-info">
                            login
                        </button>
                    </div>
                </form>
                </div>

            </div>

        </div>

        {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button value="Login" class="btn btn-primary">Login</button>
        </div> --}}
    </div>
</div>
</div>
