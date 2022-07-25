
<body style="margin: 0px; padding: 0px; font-size: 16px; background:#F4F9FF; ">
    <div class="container" style="padding: 20px; background:#F4F9FF; ">
        <div class="inner" style="padding: 0px;">
        <div class="wrap">
            <p style="">We have registered a newly registered user. Details below</p>
            <p><b>First Name:</b> {{$first_name}}</p>
            <p><b>Last Name:</b> {{$last_name}}</p>
            @if(!empty($email))
            <p><b>Email:</b> {{$email}}</p>                
            @endif
            <p><b>Phone:</b> {{$phone_number}}</p>
            <p><b>Age:</b> {{$age}}</p>
            <p><b>Class:</b> {{$class}}</p>
            <p><b>City:</b> {{$city}}</p>
            <p><b>LGA:</b> {{$lga}}</p>
            <p><b>Parent's Number:</b> {{$parents_number}}</p>
            <p><b>Parent's Occupation:</b> {{$parents_occupation}}</p>
            <p><b>Experience:</b> {{$experience}}</p>
        </div>
        </div>
    <div style="display: block;text-align:center">
    <img src="https://destinytrust.org/kih-files/images/logo.png" style="margin: 20px auto;width:180px">
    </div>
    </div>
</body>