<?php
include "database/connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Jagat Profile</title>
    <link rel="shortcut icon" href="logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
     <!-- Css styles -->
     <link rel="stylesheet" href="mystyles.css" >
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body class="bg-warning">
<nav class="navbar navbar-expand-md navbar-light bg-warning shadow mt-3" style="z-index: 1;">
            <a class="navB" href="#"><b><span style="color: black;"> Jagat Jung </span>Lakadri B.K.</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active shadow" id="co" href="#home">Home</a>
                <a class="nav-item nav-link shadow " id="co" href="#about">ABOUT</a>
                <a class="nav-item nav-link shadow" id="co" href="#skills">SKILLS</a>
                <a class="nav-item nav-link shadow" id="co" href="#serve" style="width: max-content;">SERVICES</a>
            </div>
            </div>
        </nav> 
        
        <!-- THE TITRON IMAGE -->
        <div data-aos="fade-up" class="container justify-content-center mt-5 pb-5 shadow bg-dark" id="home" >
        <img  class="pt-5" src="pictures/indexpic.png">
        <div class="center col-12"><h1 class="text-center"><b></b>I am the guy,<br>You<span class="text-warning"> searched for.</span></b></h1></div>
        </div>    
        
        
    <!--ABOUT STARTS HERE-->
        <div data-aos="zoom-out-down" class="container" style="margin-top:7%;" id="about">
        
        <div class="row">
            <div class="bg-warning mt-5">
                <h1 class="font-weight-bold" style="font-size: 60px;">ABOUT ME</h1>
                <hr class="pLine"><br>
                <p class="col-12 col-md-6" style="float: left;">
                    I am just another student who is seeking for the glowry everyone talks about. I work hard everyday and work on my skill seaching new things in the field of IT. 
                    There is no place I rather be instead of coding and trying new thing with my buddy laptop. I will be helping you to develop the website and application you alwayas wished for.<br>
                    <b>Name</b>
                    Jagat Jung Lakandri B.K.
                    <br>
                    <b>Degree:</b>
                    Bacholer's in Computer Application
                    <br><br>
                    <a href="mycv.pdf" download target="_blank"><button type="button" class="shadow mb-5 bg-warning" id="co" style="width:25%; height: 60px; border-radius: 10px; border-width: 5px;"><b> Get CV </b></button></a>
                </p>
            
            <div class="col-sm-12 col-lg-5 ml-5" style="float:left; margin-top:0%;">
                <img class="Pimage" src="pictures/mypic.jpg">
            </div>
            </div>
        </div>
        <br>


        <!-- SERVICES WALA STARTS HERE -->
    </div>
</div>
        <div data-aos="zoom-out-up" class="container-fluid bg-light p-5 w-100" style="margin-top:7%;" id="serve">
            <!-- <div class="p-3 bg-light"></div> -->
            <div class="row justify-content-center mb-">
                <h1 class="text-dark mb-4"><b>MY SERVICES</b></h1>
                <br><br>
                </div>
            <div data-aos="fade-right" class="row mt-3 justify-content-center">
                    <div class="col-sm-12 col-lg-3 card bg-warning mt-3 shadow-lg mr-lg-4 mb-lg-0 " style="border-width:0px; border-radius: 10px;">
                      <img class="card-img-top ml-5 mt-1" src="pictures/draw.svg" alt="Card image" style="width:70%">
                      <div class="card-body">
                        <h4 class="card-title text-dark text-center"><b>Graphics designing</b></h4>
                        <p class="card-text text-light text-center"><b>I have alot of experience in the field of graphisc designing for publicity purposes of orgranizations.</b></p>
                      </div></div>

                      <div data-aos="fade-up" class="col-sm-12 col-lg-3 mt-5 ml-sm-0 card bg-warning p-3 shadow-lg ml-lg-5 mr-lg-4 mt-lg-3" style="border-width:0px; border-radius: 10px;">
                        <img class="card-img-top ml-1 mt-1" src="pictures/contact.svg" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title text-dark text-center"><b>Web Development</b></h4>
                          <p class="card-text text-light text-center"><b>I have prior experience in web development with frameworks and libraries knowledge</b></p>
                        </div></div>

                        <div data-aos="fade-down" class="col-sm-12 col-lg-3 mt-5 ml-sm-0 card bg-warning p-3 shadow-lg ml-lg-5 mt-lg-3" style="border-width:0px; border-radius: 10px;">
                            <img class="card-img-top ml-5 mt-1" src="pictures/data.svg" alt="Card image" style="width:65%">
                            <div class="card-body">
                              <h4 class="card-title text-dark text-center"><b>Data Science</b></h4>
                              <p class="card-text text-light text-center"><b>Not yet, but I am in the phase of learning data science which will soon pay of big.</b></p>
                            </div>
                    
                      
                  </div>
                </div>
                </div>
            
          <br>



            <br>
<!-- SKILLS STARTS HERE -->
            <div data-aos="zoom-out" class="container" style="margin-top:7%;" id="skills" >
                <!-- <div class="p-3 bg-light"></div> -->
                <div class="row">
                    <div class="bg-warning mt-5">
                        <h1 class="font-weight-bold" style="font-size: 60px;">MY SKILLS</h1>
                        <hr class="pLine"><br>
                        <p class="col-sm-12 col-lg-6" style="float: left;">
                        My Skills are explained in right hand side. I also have knowledge in <b>
                                Frameworks like Node, Laravel & Django.
                        <img class="col-11 mt-5 ml-3" src="pictures/skill.svg">
                            </b>
                        </p>
                        
                    <!-- BARS STARTS HERE -->
                    <div class="col-sm-12 col-lg-5 ml-5 ml-0 justify-content-left" style="float:left; margin-top:-4%;">
                        
                        <?php
                            include "database/connection.php";
                            $sql="SELECT * FROM services";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    
                                    ?>
                              <p style="margin-right:6%"><b><?php echo $row['course_name']; ?></b></p>
                                    <br><br>
                                    <div class="progress mt-3">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $row['per']; ?>%;"></div>
                                    </div>
                                    <br><?php
                            }
                        }?>
                    </div>
                    </div>
                </div>
                <br>            
               </div>
            
               
        <!-- contact WALA STARTS HERE -->
    </div>
</div>
        <div data-aos="zoom-out-up" class="container-fluid bg-light p-5 w-100" style="margin-top:7%;" id="serve">
            <!-- <div class="p-3 bg-light"></div> -->
            <div class="row justify-content-center mx-5">
                <h1 class="text-dark mb-4"><b>CONTACT ME</b></h1>
                
                <div class="row">
                    <div class="bg-light mt-5">
                        <h4 class="font-weight-bold text-warning" style="font-size: 40px;">GET IN TOUCH</h4>
                        <p class="col-sm-12 col-lg-6" style="float: left; margin-top: 1%;">
                        You can mail me at <b>star5lakandri@gmail.com <br>
                        or just leave a message here</b>
                        <img class="col-8 mt-5 ml-3" src="pictures/contactme.svg">
                            </b>
                        </p>
                        <div class="col-sm-12 col-lg-5 ml-5 ml-0 justify-content-left mt-2" style="float:left; margin-top:-4%;">
                        
                            <b class="mt-3" style="font-size: 20px;">Message me</b></p>
                            <br>
                            <form action="database/insertdata.php" method="post">
                                <div class="form-inline">
                                    <input type="text" class="form-control col-4 border-warning form-inline border-warning" style="height: 50px;" SS placeholder="Enter name" id="name" name="name">
                                    <input type="email" class="form-control col-4 border-warning form-inline my-2 mx-4 border-warning" style="height: 50px;"  placeholder="Enter email" id="email" name="mail">
                                </div>
                                <div class="form-group">
    
                                  <input type="text" class="form-control mt-2 border-warning" style="height: 50px;" placeholder="Subject" id="sub" name="sub">
                                </div>
                                
                                <div class="form-group">
    
                                    <input type="text" class="form-control border-warning" style="height: 200px;"  id="dis" name="dis">
                                  </div>
                          
                                <button type="submit" class="btn btn-warning shadow"><b>Submit</b></button>
                              </form>
                </div>
                </div>
                </div>
                </div>
                </div>
            
          <br>
               

               <div id="large_screen_links">

                <!-- SOCIAL MEDIA LINKS LIST. -->
                <ul class="social_media_links">
                    
                    <!-- FACEBOOK LINK. -->
                    <li>
                        <a href="https://www.facebook.com/jagatjung.lakandribk/" target="blank" class="fa fa-facebook-square"></a>
                    </li>

                    <!-- youtube LINK. -->
                    <li>
                        <a href="https://www.youtube.com/channel/UCHjlxNgHEF25GbpRB5cblKA" target="blank" class="fa fa-youtube"></a>
                    </li>

                    <!-- github LINK. -->
                    <li>
                        <a href="https://github.com/Jagat-Jung" class="fa fa-github" target="blank"></a>
                    </li>

                    <!-- LINKEDIN LINK. -->
                    <li>
                        <a href="https://www.linkedin.com/in/jagat-jung-lakandri-b-k-11a65a201/" class="fa fa-linkedin" target="blank"></a>
                    </li>

                    <!-- Whatsapp LINK. -->
                    <li>
                        <a data-lightbox="Whatsapp" data-title="Nischal Baniya WeChat" href="https://wa.me/+977-9862406943" class="fa fa-whatsapp"></a>
                    </li>
                    
                </ul>

                <!-- FOR VERTICAL LINE. -->
                <div class="vertical_line"></div>
            
            </div>

            <!-- SOCIAL MEDIA LINKS SECTION (VISIBLE ON LARGE SCREENS) ENDS. -->

            <!-- EMAIL SECTION (VISIBLE ON LARGE SCREENS) STARTS. -->
            
            <div id="large_screen_email">

                <a href="mailto:star5lakandri@gmail.com">
                    star5lakandri@gmail.com    
                </a>

                <!-- FOR VERTICAL LINE. -->
                <div class="vertical_line"></div>
            
            </div>
            
            <!-- EMAIL SECTION (VISIBLE ON LARGE SCREENS) ENDS. -->










               <!-- FOOTER STARTS HERE -->
                  <div class="container-fluid shadow">
                    <div class="row justify-content-center">
                    <p class="text-light text-center"><b>Thank you for visiting this site. This site was create in 2021 by <span class="text-dark">Jagat Jung Lakandri B.K.</span></b></p>
                </div>
                  </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1200,
            });
        </script>
      </body>
    </html>