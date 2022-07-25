
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<!-- partial:index.partial.html -->
<div class="subscribe-main">
	<div class="modal">
        <h1 class="modal__heading">Subscribe</h1>
        <p>Get the best criminal justice and immigration news, in your inbox.</p>
		<div class="email-box">
      <form id="subscribe-form" method="POST">
        @csrf
        
        <span  class="spinner-border spinner-border-sm onPageloader" role="status" aria-hidden="true" id="spinn"></span>
        <input type="text" class="email-box__input" placeholder="Email Address" id="email"/>
        <button type="submit" class="email-box__button">Subscribe</button>
        <p id="error" class="message"></p>
        <p id="success" class="message"></p>
      </form>
		</div>
	</div>
</div>
<!-- partial -->
<script type="text/javascript" src="/js/jquery.js"></script>

<script>
  $('#subscribe-form').on('submit',function(e){
        e.preventDefault();
        $('#spinn').css('display','block');
        var email = $('#email').val();
        $.post("/api/subscribe",{
            email: email
        }).success(function(response){
          $('#spinn').css('display','none');
          $('#error').html('');
          $('#success').html('Subscribed successfully');
          $('#email').val('');
        })
        .error(function(error){
          $('#spinn').css('display','none');
          $('#error').html(error.responseJSON.errors.email[0]);
        })
                                                                    
  })
</script>
<style>
.subscribe-main {
  margin: auto;
  overflow: hidden;
  padding: 50px 0px;
}
.modal {
  width:500px;
  text-align: center;
  padding:2.5rem 4rem 4rem 4rem;
  position: relative;
  display: block;
  margin: 0 auto;
  overflow: initial;
  border: 1px solid #ff0b3a;
  z-index: 1;
}
.modal__icon {
  position: absolute;
  top: -3rem;
  left: 0;
  right: 0;
  margin: auto;
  background: #ff0b3a;
  padding: 3rem 12rem 0 12rem;
  border-radius: 50%;
}
.modal__heading {
  text-transform: uppercase;
  font-size: 20px;
  padding-bottom: 10px;
  font-weight: 900;
}
.modal p {
  font-size: 15px;
}
.email-box {
  position: absolute;
  bottom: -20px;
  width: 300px;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.email-box__input {
  color: #333333;
  display: block;
  width: 100%;
  height: 3rem;
  border-radius: 4px;
  border: 1px solid #ddd;
  font-size: 13px;
  padding: 1rem;
  margin: 0 auto;
  outline: none !important;
}
.email-box__input:focus{
  border: 1px solid #ff0b3a !important;
}
.email-box__button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: none;
  background: transparent;
  font-size: 1.3rem;
  position: absolute;
  color: #ff0b3a;
  right: 0.8rem;
  top: .9rem;
  padding: 0;
  outline: none !important;
}
.email-box__button:hover,
.email-box__button:focus {
  color: #a32815;
}
#spinn{
  position: absolute;
  right: 3px;
  display: none;
}
.message{
  position: absolute;
    bottom: -25px;
    font-size: 14px !important;
}
#error{color: red}
#success{color: green}
.email-box form{padding: 0px;}
@media only screen and (max-width: 600px) {
  .modal {
    width: 85%;
    border-radius: 4px;
    text-align: center;
    padding: 2.5rem 2rem 1rem 2rem;
  }
  .email-box {
    margin-left: 0px;
    width: 100%;
    position: relative;
    bottom: -40px;
  }
  .email-box__button{
    
    top: .5rem;
  }
}
</style>