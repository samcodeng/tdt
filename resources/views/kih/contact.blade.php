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
.page-wrap .wrap{width:400px;}
</style>
<div class="page-wrap">
  <div class="wrap">
    <div class="row">
      <div class="col-md-12" id="app">
        <div class="info" style="padding-bottom:20px">
          <h1 class="m-h1">Reach us</h1>
          <p>Fill the form to send us a message or send an email to <a href="mailto:info@destinytrust.org">info@destinytrust.org</a> and we'll reach out to you shortly.</p>
        </div>
        <Support/>
      </div>
    </div>
  </div>
</div>

@include('kih.layout.footer')

<script src="/kih-files/js/vue.js"></script>
<script src="/kih-files/js/Support.js?v=4.3.1"></script>