@extends('website.master')


@section('content')

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

<section class="services section-bg" id="services">
    <div class="container">
      <header class="section-header">
        <h3>Services</h3>
  
        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
      </header>
  
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 1</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-clipboard service-icon" style="color: #c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 2</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-chart-bar service-icon" style="color: #c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 3</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-binoculars service-icon" style="color: #c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 4</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-cog service-icon" style="color:#c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 5</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="icon" style="background: #000;">
              <i class="fa fa-calendar-alt service-icon" style="color: #c59c35;"></i>
            </div>
  
            <h4 class="title"><a href="">Service 6</a></h4>
  
            <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </div>
        </div>
  
  
      </div>
    </div>
  </section>

@endsection