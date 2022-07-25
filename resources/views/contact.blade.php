@include('layout.head')
<title>Contact Us - The Destiny Trust</title>
<meta content="Let’s answer your questions about what we do and who we are. We also value your ideas of how you want to collaborate with us" name="description" />
@include('layout.header')<!-----main------------------------------>

<style>
#about-page{height:550px}
#about-page .inner{height:550px;}
#about-page .inner p{padding-top:220px;}

    #our-cause p {
    color: #254151;
    font-weight: 300;
    padding: 10px 0px;
}
.sponsor .fab{
    color:hsl(51, 90%, 44%);
    font-size:30px;
    margin:10px;
}
#our-cause form{
    width:600px;
    margin:20px auto;
    margin-bottom:80px;
}
#our-cause input,#our-cause select{height:50px;}
#our-cause textarea{min-height:160px}
@media (max-width:768px) {
#our-cause form{width:100%}
#our-cause .main{top:-70px}
}
</style>
<div id="about-page">
<div class="inner">
<p>Let’s answer your questions about what we do and who we are. We also value your ideas of how you want to collaborate with us</p>
<a href="#our-cause"><div class="scroll-down"><i class="fa fa-arrow-down"></i></div></a>
<div class="team-bg" style="background:url('/img/blog1.jpeg?v=1.2');background-size:cover;"></div>
</div>
</div>


<div id="our-cause">
    <div class="main">
    <div class="sponsor">
      <h2>Fill the form below</h2>
      @if(!empty($success))
            <p
                style="padding:0px;display:block;font-size: 1rem;margin-top:0px;margin-bottom:15px;color:green;">
                {{$success}}</p>
            @endif
            <form method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('fullname') }}"
                        class="form-control @error('fullname') is-invalid @enderror" placeholder="Full Name *"
                        name="fullname">
                    @error('fullname')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *">
                    @error('email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="number" value="{{ old('phone_number') }}" placeholder="Phone "
                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                    @error('phone_number')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="subject" class="form-control @error('subject') is-invalid @enderror">
                        <option value="">-- Subject --</option>
                        <option value="Enquiry" @if(old('subject')=='Enquiry') selected  @endif>Enquiry</option>
                        <option value="Become a partner" @if(old('subject')=='Become a partner') selected  @endif>Become a partner</option>
                        <option value="Volunteer" @if(old('subject')=='Volunteer') selected  @endif>Volunteer</option>
                    </select>
                    @error('subject')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Message"
                        name="message" value="{{ old('message') }}" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary p-btn p-btn-1">Submit</button>
            </form>
     <div class="sponsor" style="border-bottom:0px">
      <h2>Be Social</h2>
      <a href="https://www.facebook.com/TheDestinyTrust"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.twitter.com/TheDestinyTrust"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/TheDestinyTrust"><i class="fab fa-instagram"></i></a>
    </div>    
</div>
</div>

</div>


@include('layout.footer')

<script>
    $('header').addClass('sticky');
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').addClass("sticky");
    }
});
</script>