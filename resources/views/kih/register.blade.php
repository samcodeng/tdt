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
.page-wrap .wrap{width:600px;}
.page-wrap h1{padding-bottom:30px}
</style>
<div class="page-wrap">
  <div class="wrap">
    <div class="row">
      <div class="col-md-12" id="app">
          <h1 class="m-h1">Register</h1>
        <Join/>
      </div>
    </div>
  </div>
</div>

@include('kih.layout.footer')

<script src="/kih-files/js/vue.js"></script>
<script src="/kih-files/js/Join.js?v=4.3.1"></script>