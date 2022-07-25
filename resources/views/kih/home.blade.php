@include('kih.layout.head')
@include('kih.layout.header')

<script type="text/javascript">
$(document).ready(function(){
  
    if (window.innerWidth > 928){
      var che = document.getElementById('p-text');
      if(che != null){
          var ypos,image,text;
          function parallex() {
              text = document.getElementById('p-text');
              image = document.getElementById('p-image');
              ypos = window.pageYOffset;
              text.style.top = ypos * .22+ 'px';
              image.style.right = '-'+ypos * .14+ 'px';
          console.log(ypos)
          }
          window.addEventListener('scroll', parallex),false;
      }
    }
})
</script>
<div class="home-parallax"> 
	<div class="p-inner">
		<div class="wrap"> 
			<div id="hero-main">		
        <div id="p-text">
        <h1 class="wow fadeInUp">The Future is Tech</h1>
        <p class="wow fadeInUp">NO CHILD SHOULD BE LEFT BEHIND</p>
        <a href="/kih/register"><button class="p-btn hvr-bounce-to-bottom wow fadeInUp">Register</button></a> 
        <a href="https://paystack.com/pay/ie-pg23h4p" target="_blank"><button class="p-btn p-btn2 hvr-bounce-to-bottom wow fadeInUp">Sponsor a child</button></a> 
        </div>
      </div> 
    </div>
  <div class="background"></div>
  <div class="background1"></div>
  <img src="{{asset('/kih-files/images/home.png?v=1')}}" id="p-image"/>
    <div class="vidvid">
    <Video id="myVideo" autoplay="autoplay" src="{{asset('/kih-files/images/main.mp4')}}" loop="true" muted autoplay loop>
    </video>
    </div>  
    <div class="inner">
    </div>
  </div>
</div>

<div class="section" id="our-work">
  <div class="wrap">
    <h1 class="wow fadeInUp">Our Work</h1>
    
    <div class="row">
      <div class="col-md-4">
      <a href="/kih/in-school-training">
       <div class="work work1 work3">
        <div class="img-hold">
            <div class="owl-carousel owl-theme">
                <div class="item">
                <img src="{{asset('/kih-files/images/kids-coding-at-kids-innovation-hub.jpg?v=1')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kih-in-school-training-1.jpeg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kih-in-school-training-2.jpeg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kih-in-school-training-3.jpeg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kih-in-school-training-4.jpeg')}}"/>
                </div>
                <div class="item">
                  <img src="{{asset('/kih-files/images/kih-in-school-training-5.jpeg')}}"/>
                </div>
            </div>
        </div>
        <h2 class="wow fadeInUp">In-school training</h2>
       </div>
       </a>
      </div>
      <div class="col-md-4">
      <a href="/kih/after-school">
       <div class="work work2">
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
        <h2 class="wow fadeInUp">Afterschool</h2>
       </div>
       </a>
      </div>
      <div class="col-md-4">
      <a href="/kih/bootcamps">
       <div class="work work3">
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
        <h2 class="wow fadeInUp">Bootcamps</h2>
       </div>
       </a>
      </div>
    </div>
  </div>
</div>
<div class="section section1" id="about-us">
  <div class="wrap">
    <div class="row">
      <div class="col-md-6">
       <div class="svg-hold">
       <svg id="VhjO9DuU78VlBuxo" viewBox="0 0 495.0 500.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
        <g id="tRxACDRL1vzCZLVA" style="transform:scale(1, 1);">
        <g id="ucRrxvRKgYVxtZDH" style="clip-path:url(#Gu81huS7dRKlkLXY);">
        <clipPath id="Gu81huS7dRKlkLXY">
        <path d="M493.5,308.70001220703125 C471.8999996185303,361.10001373291016 448.29999923706055,412.70001220703125 422.1999969482422,462.90000915527344 C400.59999656677246,496.700008392334 358.39999771118164,488.8000087738037 340.8999938964844,455.2000093460083 C311.6999931335449,473.90001010894775 279.3999938964844,488.2000093460083 246.29999542236328,498.40001010894775 C221.49999618530273,505.8000102043152 194.49999618530273,487.5000104904175 191.1999969482422,462.1000108718872 C171.2999973297119,474.30001068115234 142.6999969482422,466.80001068115234 131.1999969482422,446.40001106262207 C122.29999732971191,430.6000108718872 125.79999685287476,412.300012588501 130.79999694228172,395.800012588501 C111.99999770522118,394.300012588501 92.49999770522118,394.5000126361847 75.79999694228172,384.5000123977661 C32.29999694228172,357.9000120162964 44.39999732375145,298.7000093460083 73.59999689459801,265.6000108718872 C50.699997276067734,257.1000108718872 39.09999689459801,229.5000123977661 48.699997276067734,207.2000093460083 C13.99999651312828,211.80000925064087 -12.40000119805336,171.50000858306885 6.09999880194664,141.6000108718872 C11.799998611211777,131.90001106262207 21.399998992681503,124.40001010894775 32.19999918341637,121.50001049041748 C93.39999994635582,97.1000108718872 154.69999918341637,72.80000972747803 215.89999613165855,48.40001201629639 C255.099996894598,32.80001163482666 294.39999613165855,17.200011253356934 333.59999307990074,1.6000127792358398 C344.7999928891659,-1.4999871253967285 357.2999938428402,0.10001277923583984 367.2999938428402,6.0000128746032715 C387.59999307990074,17.900012493133545 395.2999938428402,45.700013637542725 382.99999365210533,65.90001440048218 C375.2999938428402,77.70001459121704 362.6999944150448,84.80001401901245 351.7999928891659,93.30001401901245 C430.5999959409237,111.80001401901245 443.0999959409237,205.40001249313354 399.2999928891659,264.2000079154968 C421.8999932706356,257.90000772476196 451.5999921262264,246.70000791549683 473.399991363287,259.3000078201294 C490.20001220703125,268.79998779296875 498.8999938964844,290.0 493.5,308.70001220703125">
        </path>
        </clipPath>
        <g id="y3SbnhXpRhSh2HI8" style="transform:scale(1, 1);transform-origin:243px 252px;">
        <image id="elTsdvEatHp4UJoW" href="{{asset('/kih-files/images/destinytrust-kid-innovation-hub.jpeg')}}" width="750.00986859px" height="500.00657906px" preserveAspectRatio="none" style="transform:translate(-127.44976278px, 0.05183158px) rotate(0deg);transform-origin:375.00493429px 250.00328953px;opacity:1.0;">
        </image>
        </g>
        </g>
        </g>
        </svg>
        </div>
      </div>
      <div class="col-md-6">
      <h1 class="wow fadeInUp">Bridging the Digital Divide</h1>
      <p class="wow fadeInUp">Through the Kids Innovation Hub, The Destiny Trust is bridging the digital divide for underrepresented children and enabling them to participate in the growing economy of the technology space. Many children would be left behind in the new digital world if all training courses are paid and priced beyond the reach of low-income people. Kids Innovation Hub provides free learning of coding, design and arts to Africa’s next generation of inventors and creators through online learning, bootcamps, in-school and afterschool learning.</p>
      <a href="/kih/register"><button class="p-btn p-btn3 hvr-bounce-to-bottom wow fadeInUp">Join Us</button></a> 
      </div>
    </div>
  </div>
<div id="tsparticles"></div>
<h1 class="kih">KIDS INNOVATION</h1>
</div>



<div class="parallax-container valign-wrapper"> 
	<div class="pa-inner">
		<div class="wrap"> 
    <div id="p-text2">
    <h1 class="wow fadeInUp">KIDS STEAM <br>BOOTCAMP 5.0</h1>
    <h2 class="wow fadeInUp">Coding | Designs | Robotics | Games | Life Skills</h2>
    <p class="wow fadeInUp">LAGOS: AUGUST 1-12, 2022<br>IBADAN: AUGUST 21-27, 2022 18.4</p>
    <a href="/kih/register"><button class="p-btn hvr-bounce-to-bottom wow fadeInUp">Register</button></a> 
        <a href="https://paystack.com/pay/ie-pg23h4p" target="_blank"><button class="p-btn p-btn2 hvr-bounce-to-bottom wow fadeInUp">Support a child</button></a> 
     </div>
     <div class="video-icon wow fadeInUp"">
        <button class="video-popup" id="play"><i class="fa fa-play"></i></button>
    </div>
    </div>
    <div class="img-hold work3">
      <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-2.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-3.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-4.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-5.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-6.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-7.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-8.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-9.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-10.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-11.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      <div class="item">
        <img src="{{asset('/kih-files/images/kids-innovative-hub-by-tdt-12.jpeg')}}" alt="Unsplashed background img 3">
      </div>
      </div>
    </div>
  </div>
</div>

<div class="partners" id="sponsors">
<div class="wrap">
<h1 class="wow fadeInUp">Supported by</h1>
<div>
<img src="{{asset('/kih-files/images/money-africa.png')}}" alt="" class="wow fadeInUp">
<img src="{{asset('/kih-files/images/ingressive-for-good.png')}}" alt="" class="wow fadeInUp imgh1">
<img src="{{asset('/kih-files/images/intelligent-innovations.png')}}" alt="" class="wow fadeInUp imgh1">
<img src="{{asset('/kih-files/images/gamsu.png')}}" alt="" class="wow fadeInUp">
</div>
</div>
</div>

@include('kih.layout.footer')
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{asset('/kih-files/js/jquery.countup.min.js')}}"></script>
<script src='https://cdn.jsdelivr.net/npm/tsparticles@2.1.0/tsparticles.bundle.min.js'></script>
<script src="{{asset('/kih-files/js/particles.js')}}"></script>

<script>
$('.counter').countUp();
$('.carousel').carousel({
  interval: 2000
})
</script>