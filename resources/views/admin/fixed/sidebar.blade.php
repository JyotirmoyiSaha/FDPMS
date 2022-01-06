<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    
      <!--Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag-->
      <div class="logo"><a href="" class="simple-text logo-normal">
         FDPMS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin.home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.dealer.list')}}">
            <i class="material-icons">person</i>
              <p>Dealer List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.user.list')}}">
              <i class="material-icons">person_pin</i>
              <p>User List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.product.create')}}">
              <i class="material-icons">production_quantity_limits</i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.product_category.prolist')}}">
              <i class="material-icons">category</i>
              <p>Product Category</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.stock.list')}}">
              <i class="material-icons">store</i>
              <p>Stock</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.dealerstock.list')}}">
              <i class="material-icons">store</i>
              <p>Dealer Stock</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.requisition.list')}}">
              <i class="material-icons">add_shopping_cart</i>
              <p>Requisition</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.distribution.list')}}">
              <i class="material-icons">shopping_cart_checkout</i>
              <p>Distribution</p>
            </a>
          </li>  
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">payments</i>
              <p>Collection</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('user.logout')}}">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>