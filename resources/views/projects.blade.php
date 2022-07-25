@include('layout.head')
<title>Our Projects - The Destiny Trust</title>
<meta content="Our amazing projects for children and young teenagers, School Enrolment & Back-to-School, Bridge Learning Centre, Kids Innovation Hub, Homeless Children Shelter, 
 Back2Basics, School Support, Hands Of Care." name="description" />
@include('layout.header')<!-----main------------------------------>

<div class="top-break">
</div>



<div class="projects">
    <div class="tabs">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">School Enrolment & Back-to-School</a></li>
    <li><a data-toggle="tab" href="#menu2">Bridge Learning Centre</a></li>
    <li id="3"><a data-toggle="tab" href="#menu3">Kids Innovation Hub</a></li>
    <li><a data-toggle="tab" href="#menu4">Homeless Children Shelter</a></li>
    <li><a data-toggle="tab" href="#menu5">Back2Basics </a></li>
    <li><a data-toggle="tab" href="#menu6">School Support</a></li>
    <li><a data-toggle="tab" href="#menu7">Hands Of Care</a></li>
  </ul>
    </div>

<div class="contents">
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active con">
      <div class="side1">
      </div>
      <div class="side2">
      <h3>School Enrolment & Back-to-School</h3>
      <p>Our Education Access initiative targets children in informal settlements. This unique demography has peculiar difficulty in taking advantage of the free education policy where it is offered. Homeless families in urban centres have little motivation to send their children to school, even if education is said to be free because there is no guarantee of a stable home. When informal settlements are demolished, they relocate without preparation and the new location may not be within school vicinity. After repeated experience displacement, children have a great sense of loss that diminishes interest in going back to school. 
Every year, hundreds of out-of-school children get the opportunity to be in school for the first time or to return to school with the support of the Destiny Trust. We provide the materials the children need to enrol or reintegrate into school. We eliminate all the barriers to schooling and hold their hands into the classroom. </p></div>
    </div>


    <div id="menu2" class="tab-pane fade con">
      <div class="side1"></div>
      <div class="side2">
      <h3>Bridge Learning Center</h3>
      <p>Our Bridge Learning Centre provides an alternative education pathway for over-aged children who never started school or who dropped out of school without completing basic education. 

An estimated 13.2 million Nigerian children are out of school. We love to put a face to this number. A massive part of this statistics is the burgeoning population of children aged 10-18. These children are the most educationally disadvantaged because they cannot access the conventional schools. They are often either considered too old to start from the nursery classes or lacking the foundational education to fit into age-appropriate grades in school. If ever admitted, these children cannot complete primary education before their twenties and often lose the motivation for formal education shortly after enrolment.

Through this project, we are changing the face of education for Nigeria’s over-aged children. We provide an accelerated education programme which enables over-aged children to acquire basic education, reintegrate into conventional schools at age-appropriate levels and acquire vocational skills.
</p>  </div> 
    </div>


     <div id="menu3" class="tab-pane fade con">
      <div class="side1"></div>
      <div class="side2">
      <h3>Kids Innovation Hub</h3>
      <p>Our Kids Innovation Hub provides opportunities to underrepresented children to acquire technology and arts skills. We believe that the ability to process information and solve problems using technology will be one of the most valuable skills in the future of work. However, disadvantaged children would be left behind again unless there are specific initiatives to ensure their inclusion.
        <br></br>
We are giving less-privileged children the opportunity to participate in the new digital world and gain tangible empowerment. We are also supporting initiatives that focus on the incorporation of computer programming into the formal school curriculum. We are driving in-school training in public schools and low-income private schools in poor communities. 
</p>
    </div>
    </div>


    <div id="menu4" class="tab-pane fade">
      <div class="side1"></div>
      <div class="side2">
      <h3>Homeless Children Shelter</h3>
      <p>
The Trust operates 3 residential learning centres Lagos and Oyo State. Our Centres are home to children who have no home. Many children find love, support and a safe place to play and learn at the Centre. 
<br></br>
Through this initiative, The Destiny Trust is adopting innovative methods to engage children in activities leading to improved academic abilities and acquisition of creative and recreational skills. We anticipate the prospects of this initiative providing an opportunity for children to acquire skills in computer programming, arts, music, fashion design, sports and other vocational fields.</p>
</div>
</div>
    <div id="menu5" class="tab-pane fade">
      <div class="side1"></div>
      <div class="side2">
      <h3>Back2Basics</h3>
      <p>Back2Basics is a literacy campaign to give children a chance to learn the basics of reading and writing in a fun and simple way. We appreciate that the most important step toward learning is acquiring the basic ability to read and write. The sad reality is that many children from disadvantaged communities lack this foundational ability even at upper primary school levels. 
<br></br>
To address this problem, we work to implement an inclusive literacy programme with an initial target to teach over 1000 children annually how to read and write. Reading and writing should be fun to children. We are making it so for them. We are also committed to providing resources, incentives and training for teachers toward improving literacy for children.</p>
</div>
  </div>
    <div id="menu6" class="tab-pane fade">
      <div class="side1"></div>
      <div class="side2">
      <h3>School Support</h3>
      <p>Everything that is essential to ensuring children have a rewarding learning experience is important to us. This is why we often go beyond enrolling them in school to ensuring we support their under-resourced schools with basic facilities and teaching resource. This has meant renovation of classrooms, provision of classroom furniture, potable water, books and personnel support. </p></div>
  </div>
    <div id="menu7" class="tab-pane fade">
      <div class="side1"></div>
      <div class="side2">
      <h3>Hands of Care </h3>
      <p>Hands of Care is our community-based health outreach organized under a collaboration with our partner, Dr. Funmi Alakija Foundation (DFAF).  Every year, hundreds of homeless children and family depend on our healthcare programmes in communities. We provide onsite health screening, treatment and referral in appropriate cases. 
<br></br>
Our goal is to extend the reach of health care to children and families who are most exposed to diseases because of homeless. We also educate children and their families on how they can improve their quality of life and provide sanitary items and other relief materials needed to keep disease away. 
</p></div>
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