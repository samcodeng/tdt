
<body style="margin: 0px; padding: 0px; font-size: 16px; background:#F4F9FF; ">
    <div class="container" style="padding: 20px; background:#F4F9FF; ">
        <div class="inner" style="padding: 0px;">
        <div class="wrap">
            <p style="">We have a new contact form message.</p>
            <p><b>Fullname:</b> {{$fullname}}</p>
            @if(!empty($email))
            <p><b>Email:</b> {{$email}}</p>                
            @endif
            <p><b>Phone:</b> {{$phone_number}}</p>
            <p><b>Message:</b> {{$description}}</p>
        </div>
        </div>
    <div style="display: block;text-align:center">
    <img src="https://destinytrust.org/kih-files/images/logo.png" style="margin: 20px auto;width:180px">
    </div>
    </div>
</body>