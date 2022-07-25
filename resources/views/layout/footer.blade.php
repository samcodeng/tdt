 
<!-------------------------->
<div class="footer">
    <div class="wrap">
        <div class="row">
            <div class="col-md-4">
            <div class="md-show">
            <h1>Be part of a better tomorrow</h1>
            <form class="input">
                <input placeholder="Enter your E-mail address"/>
                <button class="button">Join Us</button>
            </form>
            </div>
                <img src="img/destinytrust-logo-white.png" style="width:250px;margin-bottom: 10px;">
                <ul class="social">
                    <li><a href="https://www.twitter.com/thedestinytrust" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/thedestinytrust" target="_blank"><i class="fab fa-facebook-f" ></i></a></li>
                    <li><a href="https://www.instagram.com/thedestinytrust" target="_blank"><i class="fab fa-instagram" target="_blank"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/the-destiny-trust/" target="_blank"><i class="fab fa-linkedin" target="_blank"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCw9QJfaoyv-MzaXs_RbL7ig" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a></li>
                </ul> 
                <p><i class="fa fa-map-marker-alt"></i> TDT Centre, 6, Brilla F.M Road, Off Bola Tinubu Road, Bogije Town, Ibeju-Lekki, Lagos</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:info@destinytrust.org" target="_blank">info@destinytrust.org</a></p>
                <p><i class="fa fa-map-marker-alt"></i> +2348138002859</p>

            </div>
            <div class="col-md-4">
                <ul class="links">
                    <li><a href="/get-involved">Get Involved</a></li>
                    <li><a href="/our-work">Our Work</a></li>
                    <li><a href="/contact">Sponsor a project</a></li>
                    <li><a href="/sponsor-a-child">Sponsor a child</a></li>
                    <li><a href="/meet-the-team">Meet the team</a></li>
                </ul> 
            </div>
            <div class="col-md-4">
            <div class="md-no">
            <h1>Be part of a better tomorrow</h1>
            <form id="subscribe-form" class="input" method="POST">
                @csrf
                        <input class="email-box__input" id="memail" placeholder="Enter your E-mail address"/>
                        <button class="button email-box__button">Join Us 
                <span  class="spinner-border spinner-border-sm onPageloader" role="status" aria-hidden="true" id="spinn"></span></button>
                  <p id="error" class="message"></p>
                  <p id="success" class="message" style="color:forestgreen"></p>
            </form>
            </div>
                <p><a href="/privacy-policy">Privacy Policy</a><span>|</span><a href="/terms-of-services">Terms Of Services</a></p>
                <p>© 2021 The Destiny Trust. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/sticky.js"></script>

<script src='/js/gsap.min.js'></script>
<script src='/js/scrollTrigger.min.js'></script>
<script>

  if($(window).width() >= 769) {
      gsap.registerPlugin(ScrollTrigger);

      gsap.from('.stick-stick',{
          scrollTrigger:{
            trigger:'.stick-stick',
            toggleActions:"play none none reverse", 
            start:"380px 100%",
            end:"690px 100%",
            pin:true,
        },
        duration:1,
    })     
      gsap.from('.leff',{
          scrollTrigger:{
            trigger:'.showw',
            toggleActions:"play none none reverse", 
            start:"200px 100%",
        },
        duration:1,
        opacity:0,
        stagger:.3,
        x:-40
    })  

      gsap.from('.bts',{
        scrollTrigger:{
          trigger:'.bts',
          toggleActions:"play none none reverse", 
          start:"600px 100%",
          end:"550px 100%",
      },
      x:0,
      opacity:1,
      duration:.5,
      stagger:.3,
  })

      gsap.from('.l1',{
        scrollTrigger:{
          trigger:'.l1',
          toggleActions:"play none none reverse", 
          start:"20px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.1,
  })
      gsap.from('.l2',{
        scrollTrigger:{
          trigger:'.l2',
          toggleActions:"play none none reverse", 
          start:"50px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.1,
  })
      gsap.from('.l3',{
        scrollTrigger:{
          trigger:'.l3',
          toggleActions:"play none none reverse", 
          start:"70px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.1,
  })

      gsap.from('.l5',{
        scrollTrigger:{
          trigger:'.l5',
          toggleActions:"play none none reverse", 
          start:"70px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.04,
  })

      gsap.from('.l6',{
        scrollTrigger:{
          trigger:'.l6',
          toggleActions:"play none none reverse", 
          start:"70px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.04,
  })

      gsap.from('.l7',{
        scrollTrigger:{
          trigger:'.l7',
          toggleActions:"play none none reverse", 
          start:"70px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.04,
  })
      gsap.from('.l8',{
        scrollTrigger:{
          trigger:'.l8',
          toggleActions:"play none none reverse", 
          start:"70px 100%",
      },
      x:-20,
      opacity:0,
      duration:.5,
      stagger:.04,
  })


  }


$(document).ready(function() {
    if (window.innerWidth <= 768) {
        $('.drop-down').click(function() {
            $(this).toggleClass('disp');
        });
    }
})

$('.toggle-menu').click(function() {
    $('.nav-menu').toggleClass('expand');
    $(this).toggleClass('switch');
})
</script>

<script>
  $('#subscribe-form').on('submit',function(e){
        e.preventDefault();
        $('#spinn').css('display','inline-block');
        var email = $('#memail').val();
        $.post("/api/subscribe",{
            email: email
        }).success(function(response){
          $('#spinn').css('display','none');
          $('#error').html('');
          $('#success').html('Subscribed successfully');
          $('#memail').val('');
        })
        .error(function(error){
          $('#spinn').css('display','none');
          $('#error').html(error.responseJSON.errors.email[0]);
        })
                                                                    
  })
</script>
</body>
</html>