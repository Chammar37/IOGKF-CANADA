<!DOCTYPE html>
<html>

        <head>

        <?php wp_head();?>

        </head>
    
<body <?php body_class();?> >


<header>   
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- <nav class="navbar navbar-default" role="navigation"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <a class="navbar-brand" href="#">Brand</a> -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Menu</a></li>
        <li><a href="#">Menu</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    <!-- </div> /.navbar-collapse -->
<!-- </nav> -->

         
    <!-- <nav class="fixed-top">
      <div class="brand-container">
        <a class="brand" href="http://jcsoftware.ca"><img src="http://jcsoftware.ca/wp-content/themes/jcsoftware/img/logoV2.png"></a>
        <button class="hb-button" name="button"><i class="fa fa-bars"></i></button>
      </div>
      <ul class="left">
        <li>Home</li>
        <li>About Me</li>
        <li>Services</li>
      </ul>
      <ul class="right">
        <li class="nav-social-media"><a class="hvr-grow" href="https://www.linkedin.com/in/jordan-cohen-b54294111/"><i class="fab fa-linkedin-in"></i></a><a class="hvr-grow" href="https://github.com/Jordan2551"><i class="fab fa-github"></i></a></li>
        <li>Resources </li>
        <li>Contact </li>
        <li>Recent Work </li>
      </ul>
    </nav> -->
         
         
         
          <!-- Bootstrap navbar -->
     <div class="navbarDiv">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase " id="mainNav">
        <!-- <a class="navbar-brand" > -->
            <img src="http://localhost/mysite/wordpress/wp-content/uploads/2020/07/Mon.png" alt="iogkf mon" width="75" height="60">     
        <!-- </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        
        <ul class="py-2">


            <ul class="navbar-nav">

              <li class="nav-item active">
                <a class="nav-link" href="#events"> Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
              </li>
       
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>

            </ul>
          
        

        </ul>


        </div>
      </nav> 
      <i class="fab fa-linkedin-in"></i>
    </div> 


    


          <!-- VIDEO -->
            <div class="overlay"></div>
                <video playsinline="" autoplay="" loop="" muted="" class="myVideo">
                      <source type="video/mp4" src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4">
                </video>
               

              <div class="container h-100">

                    <div class="d-flex h-100 text-center align-items-center">
                        <div class ="w-100 text-white">

                              <h1 class="display-3">Welcome to IOGKF Canada</h1>
                              <p class="lead mb-0">Home of all events</p>
                        </div>
                     </div>


                </div>




  <!-- <div class="container-sm">           
        <?php wp_nav_menu(
                array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation'
                )    
        );?> 
  </div> -->

  
        
</header>

    <section class="py-5">
          <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                <h1> Traditional Karate. </h1>
                <p>The International Okinawan Goju-Ryu Karate-do Federation (IOGKF) is one of the finest, traditional karate organizations in the world today.  Under the leadership of our master, Sensei Morio Higaonna, 10th dan, the IOGKF is committed to preserving the intangible cultural treasure of Okinawan Goju-Ryu Karate-do, which has been passed down to us in its original form from one generation to the next.  Since its establishment in 1979, the IOGKF has attracted culturally diverse martial arts practitioners from around the world, who have joined the organization after recognizing the authenticity and excellence of the IOGKF and its direct karate lineage tracing back to Bushi Chojun Miyagi, the founder of Okinawan Goju-Ryu Karate-do.  Our members actively support our mission, objectives, and activities. The IOGKF now has members in over 50 affiliated countries worldwide and is the largest Okinawan karate organization in the world.  This website represents the membership of IOGKF-Canada.
                <p>The IOGKF has a worldwide network of leadership groups and karate schools in different countries with highly-qualified chief instructors and dojo instructors to meet the needs of students and families.  Training at their own pace, each IOGKF member will improve their <span style="  font-weight: 1000;">mind</span> (mental health, education, and language); <span style="  font-weight: 1000;"> body </span> (self defense skills, physical fitness, flexibility, and endurance); and <span style="  font-weight: 1000;"> spirit </span> (character, positive attitude, and contributions to society).  It is our goal to improve the “quality of life” for all of our IOGKF members to help make a positive impact on the world.  The IOGKF welcomes all potential new members to join our international karate family!</p>
                <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
                <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
                <p class="mb-2">
                  Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                </p>
              </div>
            </div>
          </div>
      </section> 
      


      





    