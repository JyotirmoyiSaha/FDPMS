@extends('website.master')


@section('content')

{{-- services --}}
<style>
    .container {
  max-width: 1320px;
}
section {
  overflow: hidden;
}

.section-bg {
  background: #f5f8fd;
}

.section-header h3 {
  font-size: 36px;
  color: #413e66;
  text-align: center;
  font-weight: 700;
  position: relative;
  font-family: "Montserrat", sans-serif;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #535074;
  width: 50%;
}

@media (max-width: 767px) {
  .section-header p {
    width: 100%;
  }
}

#services {
  padding: 60px 0 40px 0;
}

#services .box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin: 0 10px 40px 10px;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
}

#services .box:hover {
  transform: scale(1.1);
}

#services .icon {
  margin: 0 auto 15px auto;
  padding-top: 12px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
}

#services .icon .service-icon {
  font-size: 36px;
  line-height: 1;
}

#services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

#services .title a {
  color: #111;
}

#services .box:hover .title a {
  color: #c59c35;
}
#services .box:hover .title a:hover {
  text-decoration: none;
}
#services .description {
  font-size: 14px;
  line-height: 28px;
  margin-bottom: 0;
  text-align: left;
}
</style>
{{-- services --}}


<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
           <!-- Slide One - Set the background image for this slide in the line below -->
           <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
              <div class="carousel-caption d-none d-md-block">
                 <h3>Welcome to FDPMS</h3>
                 <p>Adding Green to your Life</p>
              </div>
           </div>
           <!-- Slide Two - Set the background image for this slide in the line below -->
           <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to FDPMS</h3>
                <p>Agriculture that works for the future</p>
              </div>
           </div>
           <!-- Slide Three - Set the background image for this slide in the line below -->
           <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to FDPMS</h3>
                <p>Exploring and Discovering Nature</p>
              </div>
           </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>







{{-- services --}}



<section class="services section-bg" id="services">
    <div class="container">
      <header class="section-header">
        <h3>Services</h3>
  
       <h4><p>What We’re Offering</p></h4> 
      </header>
  
      <div class="row">
         <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="  background-image: url('images/service1.png')";>
              </div>
    
              <h4 class="title"><a href="">Pesticide</a></h4>
    
              <p class="description">In general, a pesticide is a chemical (such as carbamate) or biological agent.</p>
            </div>
          </div>


         <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style=" background-image: url('images/service2.png')";>
              </div>
    
              <h4 class="title"><a href="">Aqua</a></h4>
    
              <p class="description">We deliver innovation and service to help fish producers improve fish welfare.</p>
            </div>
          </div>



         <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style=" background-image: url('images/service3.jpg')";>
              </div>
    
              <h4 class="title"><a href="">Seeds</a></h4>
    
              <p class="description">A seed is an embryonic plant enclosed in a protective outer covering.</p>
            </div>
          </div>



         <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style=" background-image: url('images/service4.png')";>
              </div>
    
              <h4 class="title"><a href="">Organic</a></h4>
    
              <p class="description">Organic fertilizer can improve the soil physical, chemical and biological properties. Organic fertilizer contributes to sustainable land management by improving these properties.</p>
            </div>
          </div>

         <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style=" background-image: url('images/service5.png')";>
              </div>
    
              <h4 class="title"><a href=""></a>Nitrogen</h4>
    
              <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </div>
          </div>
    </div>
  </section>



@endsection