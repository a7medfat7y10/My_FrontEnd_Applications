<?php include "includes/header.php"; ?>

<?php
$page = isset($_GET['p']) ? $_GET['p'] : "main" ; 

if ($page =='main') { ?>
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Our Projects</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- Our projects _start  -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Our Main Projects</h3>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <a href="project.php?p=PACE">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/PACE.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PACE">Petroleum Arabian Conference & Exhibition (PACE)</a></h3>
                                </div>
                                <p class="blog_text">
                                    PACE is a cooperation between SPE Suez, SPE Cairo and SPE AUC student chapters. It is technically and financially supported by the most reputable oilfield companies ever. Three days of fruitful technical sessions, workshops and competitions given by the most respectable pioneers in Egypt and worldwide.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="project.php?p=PICS">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/PICS.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PICS">Petroleum Industry & Career Summit (PICS)</a></h3>
                                </div>
                                <p class="blog_text">
                                    PICS is a conference of 2 days, a non-technical day and a technical one, held by SPE Suez in co-operation with SPE AUC at the American University in Cairo. PICS
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="project.php?p=sbs">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/sbs.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=sbs">SPE Business Summit (SBS)</a></h3>
                                </div>
                                <p class="blog_text">   
                                  SBS was first held in October 2019 with 9 panel discussion and followed by different sessions, mentoring circles and workshops which is presented by more than 65 specialists in more than 10 fields, such as marketing, sales, digital marketing, IT, freelancing, entrepreneurship, BD, Hr, photography and filmmaking, translation, career coaching and soft skills.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="project.php?p=e4me">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/e4me.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=e4me">Energy4Me</a></h3>
                                </div>
                                <p class="blog_text">
                                    There is no doubt that keeping the balance between meeting the need and demand for energy and preserving the environment has become the most epic challenge in the 21th century. Therefore, the direction should go towards exploiting the clean and renewable energies and raising awareness and hence the need for "Energy4me".
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="project.php?p=technical">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/technical club/tech.JPG" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=technical">Technical Club</a></h3>
                                </div>
                                <p class="blog_text">   
                                It's a great project organized by our technical segment. Several sessions are presented by our university caliber students in technical aspects. These sessions are about different topics in the petroleum industry like: Field Development Plan, well intervention, will logging, fishing, well control.. Etc. It's held along the whole season and contains several competitions with remarkable rewards.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="project.php?p=skill">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/skills club/skill.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=skill">Skills Club</a></h3>
                                </div>
                                <p class="blog_text">
                                Believing in the critical role of business skills in today professional world, SPE Suez has launched its comprehensive development project (Skills Club) with the help of its caliber leaders' experience to Prepare students for their professional future career. Skills Club consists of several programs and workshops discussing various skills through the season, such as CV writing, public speaking, graphic design, professional English.. Etc.
                                </p>
                            </div>
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </div>
    <!-- Our Projects _end -->

    <a href="https://www.facebook.com/pg/SPESuez/events/?ref=page_internal">
      <img width="100%" class="img-responsive" src="img/projects/+100.jpg"> 
    </a>
    <!-- Our Projects _end -->
    <?php 
}elseif($page =='PACE_TEST'){ ///********************************************* PACE ?> 
    
    <!-- bradcam_area_start -->
    <div class="fixed-bg no-gutters" style="background-image: url(img/projects/PACE.jpg);"></div>
    <!-- bradcam_area_end -->


    <div class="pace">

        <div class="row no-gutters">
            <div class="col-md-6 p-5">
                <h3>PACE ONLINE SUMMIT</h3>
                <p>PACE Event is the largest entrepreneurial gathering in the middle east. This year, the PACE Event 2020 is going virtual with the same PACE Buzz you know and love. The event offers you the chance to network with over 10,000+ attendees and the ability to engage in numerous features.</p>
            </div>
            <div class="col-md-6">
                <iframe width="747" height="420" src="https://www.youtube.com/embed/9xPhkC-Oqwg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="text-center text-white">
            <div class="pace_owl owl-carousel">
                <div style="background-image: url(img/projects/pace/PACE-info/Background/img1.png);">
                    <div class="p-5" style="background: linear-gradient(to right, rgba(14, 29, 51, 0.4), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(14, 29, 51, 0.4));">
                        <h3 class="text-white">PACE ONLINE SUMMIT | Powered By</h3>
                        <a class="btn btn-outline-light" href="#powered">Learn More</a>                    
                    </div>
                </div>
                <div style="background-image: url(img/projects/pace/PACE-info/Background/img2.png);">
                    <div class="p-5" style="background: linear-gradient(to right, rgba(14, 29, 51, 0.4), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(14, 29, 51, 0.4));">
                        <h3 class="text-white">PACE ONLINE SUMMIT | Our Speakers</h3>
                        <a class="btn btn-outline-light" href="#speakers">Learn More</a>                    
                    </div>
                </div>
            </div>
        </div>
        

        <!-- PREVIOUS SPEAKERS -->

        
        <div class="container pt-5 pb-5" id="speakers">
            <span>CHECK OUT</span>
            <h1>PREVIOUS SPEAKERS</h1>
        </div>
        <div class="gal-cont">
            <div id="demo" class="gallery">
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/karim-badawi.jpg" alt="">
                    <div class="name-job">
                        <h1> Karim Badawi</h1>
                        <h3>Managing Director - Egypt and East Mediterranean at Schlumberger.</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/ahmed_elbanbi1.jpg" alt="">
                    <div class="name-job">
                        <h1>Ahmed Elbanbi </h1>
                        <h3>Professor and chair of Petroleum department at The American University in Cairo.</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/algarhy_ahmed.jpg" alt="">
                    <div class="name-job">
                        <h1>Algarhy Ahmed</h1>
                        <h3>Assistant Professor - Marietta College</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/Mirna-Arif-General-Manager-of-Microsoft-Egypt.jpg" alt="">
                    <div class="name-job">
                        <h1>Mirna-Arif</h1>
                        <h3>General-Manager-of-Microsoft-Egypt</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/Mrs. Yasmin Ali.jpg" alt="">
                    <div class="name-job">
                        <h1>Yasmin Ali</h1>
                        <h3>Corporate Affairs Manager at Kuwait Energy Egypt.</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/sherif-hadara-2.jpg" alt="">
                    <div class="name-job">
                        <h1>Sherif Hadara</h1>
                        <h3>Previous Minister of Petroleum and Mineral Resources.</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/tom-blasingame.jpg" alt="">
                    <div class="name-job">
                        <h1>Tom Blasingame</h1>
                        <h3>SPE International President</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/Mostafa Fouad.jfif" alt="">
                    <div class="name-job">
                        <h1>Mostafa Fouad</h1>
                        <h3>Global director at BGS Energy Services.</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/Ibrahim Fahmy.jfif" alt="">
                    <div class="name-job">
                        <h1>Ibrahim Fahmy</h1>
                        <h3>CEng, Fellow IMarEST Independent Consultant Offshore&Marine Projects</h3>
                    </div>
                </div>
                <div class="box">
                    <img src="img/projects/pace/PACE-info/Speakers/Abdelaziz Khlaifat.jfif" alt="">
                    <div class="name-job">
                        <h1>Abdelaziz Khlaifat</h1>
                        <h3>Professor - The American University in Cairo</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Powered by -->

        <div class="container pt-5 pb-5 sponsors" id="powered">

            <h1 class="text-center pb-5">Powered by</h1>
            <div class="row justify-content-md-center">
                <div class="col-md-2 col-sm-6 col-6">
                    <img src="img/projects/pace/PACE-info/Powered-by/SU Logo Blue.png" alt="">
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img src="img/projects/pace/PACE-info/Powered-by/Alex Logo Blue.png" alt="">
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img src="img/projects/pace/PACE-info/Powered-by/AUC Logo Blue.png" alt="">
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img src="img/projects/pace/PACE-info/Powered-by/CU Logo Blue.png" alt="">
                </div>
            </div>

            <br><br>

            <h1 class="text-center pt-5 pb-5">Platinum Sponsors</h1>

            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <img src="img/projects/pace/PACE-info/Platinum-Sponsors/KEWEIT COULORED.png" alt="">
                </div>
                <div class="col-md-4">
                    <img src="img/projects/pace/PACE-info/Platinum-Sponsors/PinClipart.com_1st-place-clipart_366554.png" alt="">
                </div>
            </div>

            <br><br>


            <h1 class="text-center pt-5 pb-5">Technical Sponsors</h1>
            
            <div class="row justify-content-center">
                <div class="col-md-2 col-6">
                    <img src="img/projects/pace/PACE-info/Technical-Sponsors/1280px-Halliburton_logo.svg.png" alt="">
                </div>
                <div class="col-md-2 col-6">
                    <img src="img/projects/pace/PACE-info/Technical-Sponsors/ApacheLogo.svg.png" alt="">
                </div>
                <div class="col-md-2 col-6">
                    <img src="img/projects/pace/PACE-info/Technical-Sponsors/LogoAboukier.png" alt="">
                </div>
                <div class="col-md-2 col-6">
                    <img src="img/projects/pace/PACE-info/Technical-Sponsors/BGS-200px.png" alt="">
                </div>
                <div class="col-md-2 col-6">
                    <img src="img/projects/pace/PACE-info/Technical-Sponsors/Microsoft Logo.png" alt="">
                </div>
            </div>
        </div>

        <!-- FREQUENTLY ASKED QUESTIONS --> <br><br>

        <div class="questions">
            <div class="container">

                <h3>FREQUENTLY ASKED QUESTIONS</h3>

                <div class="question" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> 
                    What is the Digital PACE Event 2020?
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    PACE Event is the largest entrepreneurial gathering in the middle east. This year, the PACE Event 2020 is going virtual with the same PACE Buzz you know and love. The event offers you the chance to network with over 10,000+ attendees and the ability to engage in numerous features. Watch a round-up video of PACE Event 2019 Here.
                    </div>
                </div>
                <!-- ////////////////////////////////// -->
                <div class="question" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"> 
                    How will the PACE Event happen online? What can I expect from an online PACE Event?
                </div>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                    PACE Event is the largest entrepreneurial gathering in the middle east. This year, the PACE Event 2020 is going virtual with the same PACE Buzz you know and love. The event offers you the chance to network with over 10,000+ attendees and the ability to engage in numerous features. Watch a round-up video of PACE Event 2019 Here.
                    </div>
                </div>
                <!-- ////////////////////////////////// -->
                <div class="question" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"> 
                    Who can attend the event?
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                    PACE Event is the largest entrepreneurial gathering in the middle east. This year, the PACE Event 2020 is going virtual with the same PACE Buzz you know and love. The event offers you the chance to network with over 10,000+ attendees and the ability to engage in numerous features. Watch a round-up video of PACE Event 2019 Here.
                    </div>
                </div>
                <!-- ////////////////////////////////// -->
                <div class="question" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"> 
                    What are the dates for the PACE Event?
                </div>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body">
                    PACE Event is the largest entrepreneurial gathering in the middle east. This year, the PACE Event 2020 is going virtual with the same PACE Buzz you know and love. The event offers you the chance to network with over 10,000+ attendees and the ability to engage in numerous features. Watch a round-up video of PACE Event 2019 Here.
                    </div>
                </div>
                <!-- ////////////////////////////////// -->
            </div>
        </div>
    </div>

    <?php 
}elseif($page =='PACE')     { ///********************************************* PACE ?> 

    <!-- bradcam_area_start -->
    <div>
        <img width="100%" src="img/projects/pace/pace-cover.jpg">
    </div>

    <!-- bradcam_area_end -->

    <!-- PACE  Conference start  -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>LET'S SEE WHAT HAPPENED IN THE CONFERENCE</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" >
                        Petroleum Arabian Conference and Exhibition (PACE) is our mega project in a co-operation with other two student chapters, SPE Cairo and SPE AUC. The event begins with a panel discussion, gathering CEOs and top managers in the oil and gas Industry present to aspire you and to provide the required career guidance. Then we start our technical part; technical sessions from various fields, offshore and onshore drilling, safety, reservoir, and other field services as wireline and cementing. More than six companies contribute to this remarkable event as technical sponsors, beside other categories of sponsors. In addition, we have a technical competition in every single day to maximize students' benefit. Lastly, and for the first time ever in a students' conference in the petroleum industry, we have our live exhibition to present various products, projects and services, offered by various leading companies, such as Shlumberger, BGS, Baker Hughes, Kuwait Energy, ADES, Weatherford, Halliburton, Dea, OGS, bp, OGS and others.</p><br><br><br><br>
                </div>
                <div class="col-md-6">
                    <a href="project.php?p=PACE1">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/pace/1/p1.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PACE1">Petroleum Arabian Conference & Exhibition (PACE) 2018</a></h3>
                                </div>
                                <p class="blog_text"> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="project.php?p=PACE2">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/pace/2/1.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PACE2">Petroleum Arabian Conference & Exhibition (PACE) 2019</a></h3>
                                </div>
                                <p class="blog_text"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 
                <div class="col-md-6">
                    <a href="project.php?p=PACE3">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/pace/3/d1.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PACE3">PACE 2020</a></h3>
                                </div>
                                <p class="blog_text">
                                   More than six companies contributed to this remarkable event. We had a technical 
                                   competition in every single day, to maximize students' benefit. Lastly, and for the
                                    first time ever in a students' conference in the petroleum industry, we had our 
                                    live exhibition to present various products, projects and services offered by 
                                    different companies.
                                </p>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- PACE  Conference_end -->



    <?php 
}elseif($page =='PACE1')    { //-----------------------------1-- ?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>PACE 2018</h3>
    </div>
    <!-- bradcam_area_end -->


    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">Petroleum Arabian Conference and Exhibition (PACE) 2018</h3><br>
        <div class="row gallery-item">
            <div class="col-md-6">
                <a href="img/projects/pace/1/p11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p12.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p12.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p10.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p10.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p13.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p13.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p14.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p14.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/1/p15.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p15.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p16.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p16.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/1/p17.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/1/p17.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->


    <?php 
}elseif($page =='PACE2')    { //----------------------------2--- ?>


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>PACE 2019</h3>
    </div>
    <!-- bradcam_area_end -->

 
    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">Petroleum Arabian Conference and Exhibition (PACE) 2019</h3><br>
        <div class="row gallery-item">
            <div class="col-md-6">
                <a href="img/projects/pace/2/11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/2/12.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/12.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/2/4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/2/5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/2/9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/2/10.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/10.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/13.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/13.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/14.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/14.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/2/15.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/2/15.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->

    <?php 
}elseif($page =='PACE3')    { //-----------------------------3-- ?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>PACE 2020</h3>
    </div>
    <!-- bradcam_area_end -->

   
    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">Petroleum Arabian Conference and Exhibition (PACE) 2020</h3><br>
        <div class="row gallery-item">
            <div class="col-md-6">
                <a href="img/projects/pace/3/d11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d22.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d22.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d30.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d30.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d13.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d13.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d14.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d14.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pace/3/d15.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d15.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d16.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d16.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pace/3/d17.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pace/3/d17.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->


    <?php
}elseif($page =='PICS')     {///********************************************** PICS
    ?>
    <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Petroleum Industry & Career Summit (PICS)</h3>
        </div>
    <!-- bradcam_area_end -->




    <!-- our_latest_blog_start  -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>LET'S SEE WHAT HAPPENED IN THE CONFERENCE</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <p class="text-center" >
                                We believe that success will always be your own, when you are capable of integrating all your powers according to one vision. In SPE, we had a vision, to bridge the gap between students and industry.PICS was proven to be our exact example of integrating various skills into one event.Two days: One we had for non-technical skills, sponsored by BGS, through presenting various talks and success stories that can inspire every one of us to pursue his goal, even in hard times.</p><br><br><br><br>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="project.php?p=PICS1">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/projects/pics/1/12.jpg" alt="">
                        </div>
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="project.php?p=PICS1">Petroleum Industry & Career Summit (PICS) 2018</a></h3>
                            </div>
                            <p class="blog_text"></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="project.php?p=PICS2">
                        <div class="single_latest_blog">
                            <div class="thumb">
                                <img src="img/projects/pics/2/6.jpg" alt="">
                            </div>
                            <div class="content_blog">
                                <div class="blog_meta">
                                    <h3><a href="project.php?p=PICS2">Petroleum Industry & Career Summit (PICS) 2019</a></h3>
                                </div>
                                <p class="blog_text"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->



    <?php 
}elseif($page =='PICS1')    { //-----------------------------1-- ?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>PICS 2018</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">Petroleum Industry and Career Summit (PICS) 2018</h3><br>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="img/projects/pics/1/1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/1/4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/1/5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/1/9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/1/10.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/10.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/12.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/12.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/1/13.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/1/13.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->


    <?php 
}elseif($page =='PICS2')    { //----------------------------2--- ?>


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>PICS 2019</h3>
    </div>
    <!-- bradcam_area_end -->

 
    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">Petroleum Industry and Career Summit (PICS) 2019</h3><br>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="img/projects/pics/2/1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/2/4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/2/5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/2/9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/pics/2/10.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/10.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/12.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/12.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/pics/2/15.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/pics/2/15.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->
    <?php 
}elseif($page =='sbs')      { // ********************************************** SBS  ?>
    
    <div>
        <img width="100%" src="img/projects/sbs/cover.jpg">
    </div>

    <br><br><br><h2 class="text-center">SPE Business Summit</h2><br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>SPE_Business_Summit (SBS) is a 3-day event organized and curated by SPE Suez and SPE Future.
                    The summit includes:<br>
                    <br>Panel Discussions:<br> 
                    9 panel discussions is typically 3-4 experts in the field, share facts,
                     offer opinions and respond to common questions. <br>
                    <br> Sessions about Various Fields, such as marketing, sales, digital marketing,
                     IT, freelancing, entrepreneurship, BD, Hr, photography and filmmaking,
                      translation, career , presented by more than 65 specialists 
                    <br> Mentoring Circles: <br>
                    it a useful tool where a mentor who have experience in that subject matter.<br>
                    sits down with mentees to discuss a topic of interest and have an answer to your questions.<br>
                     In addition, it's a good place for brainstorming. <br>
                    <br>Workshops & Games: 
                    where you apply what you listen about particular topic 
                    <br> Exhibitions:<br> 
                    where companies and organizations identify themselves and offer their products
                    It's held to help you to:<br>
                    1- discover what career fit you<br>
                    2- discover the latest trends and information needed to make good decisions or take action<br>
                    3- learn how you can continue to evolve into the best version of yourself<br>
                4-<i class="fa fa-"> make new connections with leaders in key industries make new connections with leaders in key industries make new connections with leaders in key industries make new connections with leaders in key industries make new connections with leaders in key industries make new connections with leaders in key industries</i><br><br><br>
                </p>
            </div>
        </div>
    </div>





    <!-- Image Gallery awar start -->
    <div class="container section-top-border">
        <h3 class="text-center">SPE Business Summit (SBS) </h3><br>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/sbs/sbs2/4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/sbs/sbs2/5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/6.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/8.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/sbs/sbs2/9.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/9.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/projects/sbs/sbs2/10.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/10.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/11.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/11.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/12.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/12.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/projects/sbs/sbs2/13.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/projects/sbs/sbs2/13.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Image Gallery awar end -->


    <?php 
}elseif($page =='e4me')     { // ********************************************** E4ME ?>


    <!-- bradcam_area_start -->
    <div>
        <img width="100%" src="img/projects/e4me/cover.jpg">
    </div><br><br>
    <!-- bradcam_area_end -->

    <div class="container e4me">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <h2 class="text-center"><i class="fa fa-question"></i> What is Energy4me?</h2><br>
                </div>
            </div>
            <div class="col-md-12">
                <p class="text-center">There is no doubt that keeping the balance between meeting the need and demand for energy and preserving the environment has become the most epic challenge in the 21th century. Therefore, the direction should go towards exploiting the clean and renewable energies and raising awareness and hence the need for "Energy4me". Energy4me is a committee in SPE, aiming to enlighten school and college students, since they represent the future, about the renewable resources of energy and spread the awareness of enivronmental preservation for a better future.</p>
            </div>
        </div>

        <br><br> <!--*******************************-->

        <h1 class="text-center">Energy4me main projects</h1><br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/4.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/5.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/1/6.jpg">
                    </div>
                </div>
                <h4>About orphans visits</h4>
                <p>In these visits, Energy4me members visit orphans with the Extra-curricular committee, play with them, study with them, give them games and develop their soft skills.  </p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/4.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/5.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/6.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/7.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/8.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/9.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/10.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/2/11.jpg">
                    </div>
                </div>
                <h4>About School visits</h4>
                <p>in Energy4me school visits, our members give students of the primary and preparatory schools presentations about renewable and non-renewable energies and how they can keep the environment from pollution and give them tips for how to invest in their soft skills such as: communication, presentation, language learning and teamwork etc. Also, we play some games with them that help them to learn faster and make experiments together so that the information they take, they never forget.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/4.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/5.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/6.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/7.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/e4me/3/8.jpg">
                    </div>
                </div>
                <h4>About science fair</h4>
                <p>SPE Suez Science Fair is an exhibition, held in the university by our academy members in cooperation with Energy4me members which exhibits small static and dynamic models of objects and operations that are related to petroleum engineering such as: separators, drilling bits, rig components, sucker rod model, esp model, mud quality test equipment, etc.</p>
            </div>
        </div>


        <br><br>
    </div>


    <div class="container">
    </div>

    <!-- start technical club -->

    <?php 
}elseif($page =='technical'){ // ********************************************** technical  ?>


    <!-- bradcam_area_start -->
    <div>
        <img width="100%" src="img/projects/technical club/cover.jpg">
    </div><br><br>
    <!-- bradcam_area_end -->

    <div class="container e4me">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <h2 class="text-center"><i class="fa fa-question"></i> What is Technical Club?</h2><br>
                </div>
            </div>
            <div class="col-md-12">
                <p class="text-center">It's a great project organized by our technical segment. Several sessions are presented by our university caliber students in technical aspects. These sessions are about different topics in the petroleum industry like: Field Development Plan, well intervention, will logging, fishing, well control.. Etc. It's held along the whole season and contains several competitions with remarkable rewards.</p>
            </div>
        </div>

        <br><br> <!--*******************************-->

        <h1 class="text-center">Technical Club main projects</h1><br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/1/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/1/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/1/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/1/4.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/1/5.jpg">
                    </div>
                </div>
                <h4>Well Intervention Session</h4>
                <p>The session included the well intervention and workover operations and the equipment used in the heavy well intervention services such as: coiled tubing and snubbing units and the light services such as: wireline. It also included details about the small equipment used and how they were used in the workover and well intervention operations.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/2/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/2/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/2/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/2/4.jpg">
                    </div>
                </div>
                <h4>Reservoir Charactaristics Session</h4>
                <p>It included the fluid and rock properities going through the wettability and capillarity in detail. It summarized the wettability and capillarity curves and also included the different drive forces in the reservoir and the IPR and VLP curves shortly.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/3/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/3/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/3/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/3/4.jpg">
                    </div>
                </div>
                <h4>Nodal Analysis Session</h4>
                <p>It showed the importance of choosing different nodes to work on as an operating flow rate. It also included the different methods of drawing the inflow performance curves such as: vogel, standing and fetkovic. It also included the future prediction of the IPR curves and the drawing of vertical lift performance curves. It also showed the importance of changing the VLP and IPR curves to get the best operating point.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/4/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/4/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/technical club/4/3.jpg">
                    </div>
                </div>
                <h4>Water Flooding Session</h4>
                <p>It showed the mechanism used in water flooding showing all the details that happens underground when water displaces the oil to be produced. It also included details about the fractional flow model and other advanced models in the water flow so the optimum production of oil is obtained out of the water flooding process.</p>
            </div>
        </div>
        <br><br>
    </div>
    <!-- start skills club -->

    <?php 
}elseif($page =='skill')    { // ********************************************** skill  ?>

    <!-- bradcam_area_start -->
    <div>
        <img width="100%" src="img/projects/skills club/cover.jpg">
    </div><br><br>
    <!-- bradcam_area_end -->

    <div class="container e4me">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <h2 class="text-center"><i class="fa fa-question"></i> What is Skills Club?</h2><br>
                </div>
            </div>
            <div class="col-md-12">
                <p class="text-center">Believing in the critical role of business skills in today professional world, SPE Suez has launched its comprehensive development project (Skills Club) with the help of its caliber leaders' experience to Prepare students for their professional future career. Skills Club consists of several programs and workshops discussing various skills through the season, such as CV writing, public speaking, graphic design, professional English.. Etc.</p>
            </div>
        </div>

        <br><br> <!--*******************************-->

        <h1 class="text-center">Skills Club main projects</h1><br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/1/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/1/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/1/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/1/4.jpg">
                    </div>
                </div>
                <h4>Social Life Session</h4>
                <p>it was about Lifestyles and how we communicate with each other. it was included the definition of communication between us as human beings and methods to create an effective communication which capable of enabling us to achieve and co-operate in teams or groups. to sum up, there was a self-assessment application to inform everyone about the features of each person's dealings with each other and also the pros and cons of this dealing, then the ways to improve it.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/2/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/2/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/2/3.jpg">
                    </div>
                </div>
                <h4>Presentation Skills Session</h4>
                <p>The second session was about presentation skills and the steps to make an excellent show with the audience. The session included the steps to create a presentation using Microsoft PowerPoint program and appropriate font, type color and other settings within the presentation. In addition, it included some important advices to speak and attract the audience to listen attentively and carefully to the content that is displayed.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/3/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/3/2.jpg">
                    </div>
                </div>
                <h4>Public Speaking Session</h4>
                <p>3rd session was about how to escape from the fear of public speaking in front of an audience on the stage. in addition, it clarified the difference between public speaking and presentation skills and ways to make public speeches, body language, tonality, and eye contact. At the end of the session, there is a practical test through showing some pictures and telling audience to make a small speech about what he/she saw in this picture.</p>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/4/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/4/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/4/3.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/4/4.jpg">
                    </div>
                </div>
                <h4>Digital marketing Session</h4>
                <p>This session was presented by a certified ambassador from google. the session included the skills needed at all Web platforms, customer engagement, in addition to the way to support entrepreneurs and investors by creating ideas that help them spread their creativity and products. The session was certified.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/5/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/5/2.jpg">
                    </div>
                </div>
                <h4>Presentation Tips and Tools Session</h4>
                <p>The session was about how to make a presentation by using Prezi.com, Aids, tools, tips, and FAQs, in addition to the best methods for searching, brainstorming, filtring the target content from the resources.</p>
            </div>
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/6/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/6/2.jpg">
                    </div>
                </div>
                <h4> Body Languages Session</h4>
                <p>The session was prepared for each committee individually. it was included body language and it's secrets to make a success communicate with each other.</p>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/7/1.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/7/2.jpg">
                    </div>
                    <div class="single_testmoial">
                        <img width="100%" src="img/projects/skills club/7/3.jpg">
                    </div>
                </div>
                <h4>Graphic Design</h4>
                <p>the designing program included Photoshop tutorial. during these sessions, we focused on delivering the knowledge with applications at all terms of the program.</p>
            </div>
        </div>
        <br><br>
    </div>

    <?php 
} ?>


<?php include "includes/footer.php"; ?>


