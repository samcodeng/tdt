
      <div class="footer">
      <img src="{{asset('/kih-files/images/footer.color.svg')}}"/>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- select donation option -->
            <div id="videoOption">
                <div class="embed-responsive embed-responsive-16by9 videoWrapper" id="video">
                  <iframe class="embed-responsive-item trailervideo" allowfullscreen allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="app">
        <Join/>
      </div>
    </div>
  </div>
</div>
      <!--- FOOTER -->

      <script type="text/javascript" src="{{asset('/kih-files/js/sticky.js')}}"></script>
      <script src="{{asset('/kih-files/js/materialize.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('/kih-files/js/bootstrap.min.js?v=1.2')}}"></script>
      <script src="{{asset('/kih-files/js/init.js')}}"></script>
      <script src="{{asset('/kih-files/owlcarousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('/kih-files/js/smoothscroll.js')}}"></script>
      <script>
        $('.toggle-menu').click(function() {
          $('.nav-menu').toggleClass('expand');
          $('header .wrap').toggleClass('bg');
          $(this).toggleClass('switch');
	        $("#logo").toggleClass("is-white");
        })
$('.work2 .owl-carousel').owlCarousel({
    loop: true,
    dots: true,
    center: true,
    nav:false,
    margin: 5,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 5120,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1,
            center: false,
        },
        600: {
            items: 1,
            center: false,
        },
        1000: {
            items: 1,
            center: false,
        }
    }
});

$('.work3 .owl-carousel').owlCarousel({
    loop: true,
    dots: true,
    center: true,
    nav:false,
    margin: 5,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1,
            center: false,
        },
        600: {
            items: 1,
            center: false,
        },
        1000: {
            items: 1,
            center: false,
        }
    }
});
      </script>
      
<script>
  $('#subscribe-form').on('submit',function(e){
        e.preventDefault();
        $('#spinn').css('opacity','1');
        var email = $('#subemail').val();
        $.post("/api/kih/subscribe",{
            email: email
        }).success(function(response){
          console.log(response);
          $('#spinn').css('opacity','0');
          $('#error').css('opacity','0');
          $('#success').html('subscribed successfully');
          $('#subemail').val('')
          setTimeout(function(){
            $.get("/api/kih/run");
          },1000); 
          setTimeout(function(){
            $.get("/api/kih/run");
          },80000); 
        })
        .error(function(error){
          $('#spinn').css('opacity','0');
          console.log(error.responseJSON.errors.email[0]);
          $('#error').html(error.responseJSON.errors.email[0]);
        })
                                                                    
  })
  $.get("/api/kih/run");
  
$(document).ready(function() {
    if (window.innerWidth <= 768) {
        $('.drop').click(function() {
            $(this).toggleClass('disp');
        });
    }
})


//on close remove
$('#videoModal').on('hidden.bs.modal', function() {
    $('#videoModal .trailervideo').empty();
});
$('[id="play"]').click(function() {
    //Add "src" attribute by getting the video and setting it with setAttribute.
    document.getElementsByClassName('trailervideo')[0].setAttribute('src',
        'https://www.youtube.com/embed/O_nUGqH9_Ek?autoplay=1');
    $('#videoModal').modal('show');
    this.video = true;
    //on close remove
    $('#videoModal').on('hidden.bs.modal', function() {
        document.getElementsByClassName('trailervideo')[0].setAttribute('src', '');
    });
});

$('[class="reg-btn"]').click(function() {
    $('#registerModal').modal('show');
});
</script>
    </body>
    </html>
    
    