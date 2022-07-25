@include('layout.head')
<title>Sponsor A Child - The Destiny Trust</title>
<meta content="Together, we can touch more lives; we can be the hope of that one child that could become a menace to the society without a timely intervention to provide care, education and empowerment." name="description" />
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
    color:#45b29d;
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
<p style="font-size:20px">Sponsor A Child</p>
<a href="#our-cause"><div class="scroll-down"><i class="fa fa-arrow-down"></i></div></a>
<div class="team-bg" style="background:url('/img/Back-to-school.jpg');background-size:cover;"></div>
</div>
</div>


<div id="our-cause">
    <div class="main">
    <div class="sponsor">
      <h2>Fill the form below</h2>
      @if(!empty($success))
            <p class="invalid-feedback"
                style="padding:0px;color:green;display:block;font-size: 1rem;margin-top:0px;margin-bottom:15px;">
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
                <div class="row">
            
                <div class="form-group col-md-6">
                    <input type="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *">
                    @error('email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div> 
                
                <div class="form-group  col-md-6">
                    <input type="text" value="{{ old('phone_number') }}"
                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number *">
                    @error('phone_number')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" value="{{ old('number_of_children') }}"
                                class="form-control @error('number_of_children') is-invalid @enderror" name="number_of_children" placeholder="Number of children">
                            @error('number_of_children')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="gender" class="form-control">
                                <option value="Any Gender" @if(old('gender')=='Any Gender') selected  @endif>Any Gender</option>
                                <option value="Female" @if(old('gender')=='Female') selected  @endif>Female</option>
                                <option value="Male" @if(old('gender')=='Male') selected  @endif>Male</option>
                            </select>
                        </div> 
                    </div>
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