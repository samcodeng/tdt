@include('kih.layout.head')
@include('kih.layout.header')
<style>
header{    box-shadow: 0px 0px 10px 1px rgb(0 0 0 / 20%);
    top: 0;
    background: #fff;
    padding: 15px 0px;
}
header nav ul li a {
    color: #27496c;
}
.logo .i2{display:block}
.logo .i1{display:none}
</style>
<div class="page-wrap">
  <div class="wrap">
    <div class="row">
      <div class="col-md-5 work work2">
        <div class="img-hold">
            <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="{{asset('/kih-files/images/kids-innovation-hub-after-school.jpg?v=1')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/after-school-2.jpg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/after-school-1.jpg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kids-innovation-hub-after-school-hub.jpg?v=1')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/after-school-4.png?v=1')}}"/>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-7" id="app">
      <div class="padd">
          <h1 class="m-h1">After School</h1>
      <p>Kids Innovation Hub operates community-based centres to equip children with technology and arts skills. The Hubs provide children with the opportunity to start their learning journey with basic digital skills and an elementary coding programme.
<br><br>
Children who demonstrate specialised interest in the basic modules are incorporated into the Codetribe- our peer learning community of children on the pathway to acquiring advanced tech, designs and digital arts skills.
<br><br>
Our Hubs are set up to provide children with continuing mentoring, opportunity to collaborate on projects, learn with others and have access to computer devices and resources they require to improve their learning and acquire more advanced skills.</p>
          <a  href="https://paystack.com/pay/ie-pg23h4p" target="_blank"><button class="p-btn p-btn3 hvr-bounce-to-bottom wow fadeInUp">Sponsor a hub</button></a> 
      </div>
      </div>
    </div>
  </div>
</div>

@include('kih.layout.footer')

<script src="/js/vue.js"></script>
<script src="/js/Support.js?v=2.16.2"></script>