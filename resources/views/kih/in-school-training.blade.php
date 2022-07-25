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
      </div>
      <div class="col-md-7" id="app">
      <div class="padd">
          <h1 class="m-h1">In-school Training</h1>
      <p>Because no child should be left behind, we collaborate with governments and schools for low-income families to carry on digital skills learning into the classroom.<br><br>
Children in public schools and low-income private schools in underserved communities get introduced to the use of computers for the first time. We adopt the Google CS First approach that makes coding simple, engaging and fun to learn. 
<br><br>
Through the In-school training, we also create a pipeline of children with outstanding interest in tech who go on to join our Codetribe- a community of children on the pathway to advanced learning of technology skills.
</p>
          <a  href="https://paystack.com/pay/ie-pg23h4p" target="_blank"><button class="p-btn p-btn3 hvr-bounce-to-bottom wow fadeInUp">Sponsor an In-school Training</button></a> 
      </div>
      </div>
    </div>
  </div>
</div>

@include('kih.layout.footer')

<script src="/js/vue.js"></script>
<script src="/js/Support.js?v=2.16.2"></script>