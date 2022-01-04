@extends('master')

@section('content')

<style>
/*-------- global --------*/
body {
	background: #7f7fd5;
  background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
	font-family: Helvetica, Arial, sans-serif;
	font-size: 16px;
}
.container {
	margin: 50px;
}

/*-------- flex container --------*/
.flex-container {
	display: flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-box;
	display: -webkit-flex;
	justify-content: space-around;
	list-style: none;
	margin: 0;
	padding: 0;
	-webkit-flex-flow: row wrap;
	position: relative;
}
.flex-item {
	color: #fff;
	height: 210px;
	margin: 10px 0;
	padding: 0;
	width: 225px;
	position: relative;
}
.flex-item-inner {
	display: flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-box;
	display: -webkit-flex;
	flex-direction: column;
	justify-content: flex-start;
	height: 210px;
	margin: 0;
	padding: 0;
	width: 100%;
}
.flex-item-inner a {
	color: #fff;
	cursor: pointer;
}

/*-------- cards --------*/
.card-front,
.card-back {
	position: absolute;
	top: 0;
	left: 0;
	width: 185px;
	height: 200px;
	padding:3px;
	margin: 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
	justify-content: flex-end;
}
.card-front i.tile-icon {
    display: block;
    margin: 17px auto 18px auto;
    text-align: center;
}
.card-front h4 {
	font-size: 18px;
	font-weight: normal;
	margin: 10px 0;
}
.card-front p.detail {
	font-size: 24px;
	font-weight: bold;
	margin: 0;
}
.card-front.bg-violet {
	background-color: #702082;
}
.card-front.bg-magenta {
	background-color: #c110a0;
}
.card-front.bg-blue {
	background-color: #00a0d2;
}
.card-front.bg-green {
	background-color: #00c389;
}
.card-back {
	background-color: #1e1e1e;
	-webkit-transform: rotateY(-180deg);
	transform: rotateY(-180deg);
}
.card-back p.title {
	color: #000;
	margin-top: 0;
	
}
.card-back p.desc {
	color: #63666a;
}
.card-back a.link {
	color: #702082;
}
.card-back.bg-violet {
	background-color: #d8d7df;
}
.card-back.bg-magenta {
	background-color: #ddd0cf;
}
.card-back.bg-blue {
	background-color: #c8d7df;
}
.card-back.bg-green {
	background-color: #d9e6dc;
}

/*-------- cards / flip effect --------*/
.flex-item:hover .card-front {
	-webkit-transform: rotateY(-180deg);
	transform: rotateY(-180deg);
}
.flex-item:hover .card-back {
	-webkit-transform: rotateY(0);
	transform: rotateY(0);
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 44px;
    margin-left: -13px;
}
</style>



<div class="container">
  <div class="row">
    <!-- flex-container -->
      <div class="col-md-12 flex-container">
        <!-- flex-item -->
          <div class="flex-item">
            <div class="flex-item-inner">
                <!-- card -->
                <a href="#">
                      <div class="card-front bg-violet">
                          <i class="fa fa-pie-chart fa-3x tile-icon icon-white"></i>
                          <p class="detail">User Info</p>
                      </div>
                      <div class="card-back bg-violet">
                          <p class="title"><b> User Information</b></p>
                          <p class="desc">View the user Information</p>
                          <a href="{{route('admin.user.list')}}" class="link">View <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                  </a>
                  <!-- /card -->
              </div>
          </div>
          <!-- /flex-item -->
          
          <!-- flex-item -->
          <div class="flex-item">
            <div class="flex-item-inner">
                <!-- card -->
                  <a href="#">
                      <div class="card-front bg-magenta">
                          <i class="fa fa-heart fa-3x tile-icon icon-white"></i>
                          <h4>HSA Total Balance</h4>
                          <p class="detail">$XXX,XXX</p>
                      </div>
                      <div class="card-back bg-magenta">
                          <p class="title">Praesent varius mi sem</p>
                          <p class="desc">Cras posuere consequat nisl, ut rhoncus odio finibus sit amet. Sed consectetur dapibus.</p>
                          <a class="link">View <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                  </a>
                  <!-- /card -->
              </div>
          </div>
          <!-- /flex-item -->
          
          
          <!-- flex-item -->
          <div class="flex-item">
            <div class="flex-item-inner">
                <!-- card -->
                  <a href="#">
                      <div class="card-front bg-green">
                          <i class="fa fa-bar-chart fa-3x tile-icon icon-white"></i>
                          <h4>Savings Plan Total Balance</h4>
                          <p class="detail">$XXX,XXX</p>
                      </div>
                      <div class="card-back bg-green">
                          <p class="title">Curabitur elementum augue</p>
                          <p class="desc">Nullam porttitor dui quis commodo mattis. Fusce posuere, nisl id ultrices pellentesque.</p>
                          <a class="link">View <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                  </a>
                  <!-- /card -->
              </div>
          </div>
          <!-- flex-item -->

                    <!-- flex-item -->
                    <div class="flex-item">
                      <div class="flex-item-inner">
                          <!-- card -->
                            <a href="#">
                                <div class="card-front bg-green">
                                    <i class="fa fa-bar-chart fa-3x tile-icon icon-white"></i>
                                    <h4>Savings Plan Total Balance</h4>
                                    <p class="detail">$XXX,XXX</p>
                                </div>
                                <div class="card-back bg-green">
                                    <p class="title">Curabitur elementum augue</p>
                                    <p class="desc">Nullam porttitor dui quis commodo mattis. Fusce posuere, nisl id ultrices pellentesque.</p>
                                    <a class="link">View <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </a>
                            <!-- /card -->
                        </div>
                    </div>
                    <!-- flex-item -->

                    <!-- flex-item -->
          <div class="flex-item">
            <div class="flex-item-inner">
                <!-- card -->
                <a href="#">
                      <div class="card-front bg-blue">
                          <i class="fa fa-sun-o fa-3x tile-icon icon-white"></i>
                          <h4>Your Paid Time Off Balance</h4>
                          <p class="detail">Distriubtion</p>
                      </div>
                      <div class="card-back bg-blue">
                          <p class="title">Vestibulum eget sem malesuada</p>
                          <p class="desc">Etiam imperdiet ullamcorper dolor sit amet molestie. Quisque eu nibh in ligula.</p>
                          <a class="link">View <i class="fa fa-chevron-circle-right"></i></a>
                      </div>
                  </a>
                  <!-- /card -->
              </div>
          </div>
          <!-- /flex-item -->
          
      </div>
      <!-- /flex-container -->
  </div>
</div>
  @endsection