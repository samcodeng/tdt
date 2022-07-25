@include('layout.head')
<title>The Destiny Trust</title>
<meta content="At The Destiny Trust, we educate, empower and care for homeless children and other classes of young people in disadvantaged circumstances. " name="description" />
@include('layout.header')<!-----main------------------------------>

<div class="section-one">
    <div class="wrap">
        <div class="text">
            <h1 class="bts">Care.<br> Education.<br> Empowerment.</h1>
            <p class="bts">Empowering children to be their best, recreating our future</p>
            <a href="/get-involved"><button class="p-btn bts">Get Involved</button></a>
        </div>
    </div>
    <div class="inner"></div>
    <div class="background"></div>
    <div class="foreground"></div>
</div>

<!---------------------------------->
<div class="donation">
    <div class="wrap">
        <div class="row">
            <div class="col-md-6 ">
                <h4>Make a Donation</h4>
                <p>Without good people like you, we can’t educate, feed, shelter or empower children with critical
                needs. Start giving. It’s safe and easy</p>
            </div>
            <div class="col-md-6">
                <div class="flex">
                    <span class="amount active" id="500">&#8358;500</span>
                    <span class="amount" id="1000">&#8358;1,000</span>
                    <span class="amount" id="5000">&#8358;5,000</span>
                </div>
                <div class="flex md-no-flex">
                    <div class="input">
                        <input placeholder="Other amount" class="other_amount" type="number"/>
                        <span class="amount-sign">&#8358;</span>                            
                    </div>
                    <a href="http://bit.ly/DestinyTrust" class="button">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------->
<div class="fancy-wrap">
    <div class="wrap">
        <div class="row">
            <div class="col-md-7">
                <h2><strong>We are committed to one cause:</strong> enabling every child to be the best he or she can be regardless of where he or she was born.</h2>
                <p>At The Destiny Trust, we are all about the wellbeing, education and empowerment of homeless children and other classes of young people in disadvantaged circumstances.  We give children at-risk a new start, nurture them and hold their hands into the future through our integrated initiatives which focus mainly on using education to create tangible empowerment and lifting children from extreme poverty and conditions that hold them back. </p>
                <a href="/get-involved" class="p-btn p-btn-1">Join Us</a>
            </div>
            <div class="col-md-5">                
                <img src="img/charity-organization-destiny-trust.jpg" class="fance2">
            </div>
        </div>
    </div> 
</div>


<div class="section-two section-two-two"> 
        <div class="left"> 
        <div class="s-text"> 
            <h1>Together, we can touch more lives; we can be the hope of that one child that could become a menace to the society without a timely intervention to provide care, education and empowerment. Our desire is to see them thrive, pursue lifelong happiness and purpose.</h1>           
            <a href="/our-work" class="p-btn p-btn-1">Let's Touch More Lives Together</a>
        </div> 
    </div>
    <div class="right"></div>
</div>
<div class="box-container">
    <div class="wrap">
        <div class="box-top">  
          <h1>Our Projects</h1>
          <p></p>   
      </div>
      <div class="row">
        <div class="col-md-4">
           <div class="z-well">
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i> 
            </div>
            <h4>Education Access</h4>
            <p>Our Education Access initiative targets children in informal settlements. This unique demography has peculiar difficulty in taking advantage of the free education policy where it is offered. </p>
            <div class="inner"></div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="z-well">
            <div class="icon">
                <i class="fab fa-houzz"></i>  
            </div>
            <h4>Homeless Children Shelter</h4>
            <p>The Trust operates 3 residential learning centres in Lagos and Oyo State. Our Centres are home to children who have no home. Many children find love, support and a safe place to play and learn at our centres. </p>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="z-well">
            <div class="icon">
                <i class="fas fa-book-open"></i>  
            </div>
            <h4>Bridge Learning Center</h4>
            <p>Our Bridge Learning Centre provides an alternative education pathway for over-aged children who never started school or who dropped out of school without completing basic education.</p>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="z-well">
            <div class="icon">
                <i class="far fa-lightbulb"></i>  
            </div>
            <h4>Kids Innovation Hub</h4>
            <p>Our Kids Innovation Hub provides opportunities to underrepresented children to acquire technology and arts skills.</p>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="z-well">
            <div class="icon">
                <i class="fab fa-accusoft"></i>  
            </div>
            <h4>School Support</h4>
            <p>Everything that is essential to ensuring children have a rewarding learning experience is important to us. This is why we support their under-resourced schools with basic facilities and teaching resource. </p>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="z-well">
            <div class="icon">
                <i class="fas fa-hand-holding-heart"></i>  
            </div>
            <h4>Hands Of Care</h4>
            <p>Hands of Care is our community-based health outreach organized under a collaboration with our partner, Dr. Funmi Alakija Foundation (DFAF).</p>
        </div> 
    </div>
</div>
<div style="text-align:center;padding-top: 15px;">
            <a href="/projects" class="p-btn p-btn-1">Learn More</a>    
</div>
 
</div>
</div>
<!------------------------------------------------------------------------------------------------>


<!---------------------------------------------->

@include('layout.community')

 
<div class="box2">
    <div class="wrap">
        <h2>Latest Resources</h2>
        <div class="row">
            
        @foreach($posts as $post)
           <div class="col-md-6">
               <div class="img">
                <img src="{{$post->thumbnail}}" alt="{{$post->post_title}}">
               </div>
               <div class="p-text">
                   <h4>{{$post->post_title}}</h4>
                   <p>{{$post->post_excerpt}}</p>
                   <h5>by <strong>{{$post->author}}</strong> <span>|</span> {{date('d M, Y', strtotime($post->post_date))}}</h5>
                   <a href="{{$post->url}}">Read More </a>
               </div>
           </div>
        @endforeach
    </div>
    <!--------------------------------->
    <div class="press">
        <div class="text">
            <div class="txt">
                <h6>Press Release</h6>
            </div>
            <h6>August 6, 2019</h6>
            <h4>NGO launches free education campaign for homeless children</h4>
            <a href="https://www.thecable.ng/ngo-launches-free-education-campaign-for-homeless-children/amp" target="_blank">
                Read More <span>- thecable.ng</span>
            </a>
        </div>
    </div>

    <div class="press">
        <div class="text">
            <div class="txt">
                <h6>Press Release</h6>
            </div>
            <h6>August 9, 2018</h6>
            <h4>Homeless Children Must Access Basic Education, Says Destiny Trust</h4>
              <a href="https://saharareporters.com/2018/08/09/homeless-children-must-access-basic-education-says-destiny-trust" target="_blank">
                Read More <span>- saharareporters.com</span>
            </a>
        </div>
    </div>

    <div class="press">
        <div class="text">
            <div class="txt">
                <h6>Press Release</h6>
            </div>
            <h6>December 3, 2018</h6>
            <h4>Destiny Trust, Funmi Alakija Foundation take free healthcare to homeless children</h4>
              <a href="https://guardian.ng/news/destiny-trust-funmi-alakija-foundation-take-free-healthcare-to-homeless-children/" target="_blank">
                Read More <span>- guardian.ng</span>
            </a>
        </div>
    </div>

</div>
</div>

<div class="section-two section-two-one"> 
    <div class="inner">
        <div class="wrap">
        <div class="s-text"> 
            <h1 class="big">Give Hope</h1>
            <h1 class="small">Your support means hope of care and education for some children. Don't hold back</h1>       
            <a href="/get-involved" class="p-btn p-btn-1">Give</a>
        </div> 
            
        </div> 
    </div>
</div>

@include('layout.footer')

<script>
    $('.amount').click(function(e){
        $('span').removeClass('active');
        $('#'+e.currentTarget.id).addClass('active');
        $('.other_amount').val(e.currentTarget.id)
    })
</script>