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
.p-btn{font-size:11px}
</style>
<div class="page-wrap">
  <div class="wrap">
    <div class="row">
      <div class="col-md-5 work work2">
        <div class="img-hold">
            <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="{{asset('/kih-files/images/coding-bootcamps-at-kids-innovation-hub.jpg?v=1')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/boot-camp-1.png')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/boot-camp-3.jpg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/boot-camp-4.jpeg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/boot-camp-5.jpeg')}}"/>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-7" id="app">
      <div class="padd">
          <h1 class="m-h1">Bootcamps</h1>
      <p>Every August, we host an immersive summer bootcamp for underrepresented children. Hundreds of children look forward to the summer STEAM (Science Technology Engineering Arts and Mathematics) experience.
<br><br>
At the Bootcamp, children learn, play and create magic, working in a team. We bring some of the finest role models into the Bootcamp to teach lifeskills, discuss tech trends and opportunities for the children while encouraging then on their learning journey.
<br><br>
The high point of the Bootcamp is the code challenge and hackathon where children work collaboratively to design a solution to a problem. The hackathon ends with a Demo Day for children to showcase their own inventions and get reviews from our panel members, who are leaders in the tech and design space.</p>
          <a  href="https://paystack.com/pay/ie-pg23h4p" target="_blank"><button class="p-btn hvr-bounce-to-bottom wow fadeInUp">Sponsor our Bootcamp</button></a> 
          <a  href="/register" target="_blank"><button class="p-btn p-btn2 hvr-bounce-to-bottom wow fadeInUp">Register</button></a> 
      </div>
      </div>
    </div>
  </div>
</div>

@include('kih.layout.footer')

<script src="/js/vue.js"></script>
<script src="/js/Support.js?v=2.16.2"></script>