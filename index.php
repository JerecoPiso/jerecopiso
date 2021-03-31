<!DOCTYPE html>
<html>
<head>
  	<title>JJ Online Portfolio</title>
	  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- data-spy="scroll" data-target=".links" data-offset="50"  -->
<body style="background-color: rgb(242, 242, 250);">
<!-- upper part of the main page -->
<div class="div-container">
      <div class="main-ui">
        <div class="topright">      
          <ul class="links">
            <span id="close">&times;</span>
            <li><a href="#"> <span class="fontawesome-size fa fa-home"></span> Home</a></li>
            <li><a href="javascript:void(0)" id="skills-href"> <span class="fontawesome-size fa fa-id-badge ml10"></span> Skills</a></li>
            <li><a href="javascript:void(0)" id="projects-href">  <span class="fontawesome-size fa fa-folder ml3"></span> Projects</a></li>
            <li><a href="resume.pdf">  <span class="fontawesome-size fa fa-file ml10"></span> Resume</a></li>
          </ul>
          <button id="bars"><span class="fa fa-bars"></span></button>
        </div>
      </div> 
</div>

  <!-- profile part of the main page -->
  <div class="row " id="profile">
     <div class="col-lg-1"></div>
     <div class="col-lg-5 col-md-6 col-sm-12 bg-white bbl">

           <img src="assets/images/dp.jpg">

     </div>
      <div class="col-lg-5 col-md-6 col-sm-12 bg-white bbr">
        <p class="name" style="">I'm <b>Jereco James Piso</b></p>
        <p class="my-skill" style="">Freelance Web Developer</p>
        <p class="about">I have 2 years experience in Web Development and I am passionate in learning other technologies to further hone my skills.</p>
        <p class="about">When I'm not doing programming, I like playing online games.</p>

         <ul class="footer-links">
            <p class="me">Contact Me</p>
            <li class="ml-10"><a  href="#!"><i class="fa fa-facebook-square" style="font-size:35px;color: #4267B2"></i></a></li>
            <li><a  href="#!"><i class="fa fa-twitter-square" style="font-size:35px; color: #1DA1F2"></i></a></li>
            <li><a  href="#!"><i class="fa fa-github-square" style="font-size:35px; color: rgb(0,0,0);"></i></a></li>
            <li><a  href="#!"> <i class="fa fa-envelope" style="font-size:35px; color: #DB4437;"></i> </a></li>
         </ul>
      </div>
    <div class="col-lg-1"></div>
  </div>

<!-- class div-container end -->
<div class="skills">
  <div id="skills">
     <h2 class="experience text-center">Skills</h2>
     <div class="row pb-4">
      <div class="col-lg-4 col-md-4 mt-2">
         <div class="card card-min-height"  >
               <img src="assets/images/front.png" class="card-img-top skill-cat-logo" alt="..." >
                
                <div class="card-body text-center">
                <!--  <h5 class="text-center skills-cat">Front-End</h5> -->
                  <div class="row">
                    <div class="col-lg-6 col-sm-4  mt-2">
                       <img src="assets/images/html5.png" class="skill-logo">
                    </div>
                    <div class="col-lg-6  col-sm-4  mt-2">
                       <img src="assets/images/css3.png" class="skill-logo">
                    </div>
                    <div class="col-lg-6  col-sm-4 mt-2">
                       <img src="assets/images/bootstrap4.png" class="skill-logo">
                    </div>
                    <div class="col-lg-6  col-sm-4 mt-2">
                       <img src="assets/images/mater.png" class="skill-logo">
                    </div>
                     <div class="col-lg-6  col-sm-4 mt-2">
                       <img src="assets/images/vue.png" class="skill-logo">
                    </div>
                     <div class="col-lg-6  col-sm-4 mt-2">
                       <img src="assets/images/jquery.png" class="skill-logo">
                    </div>
                  </div>               
                </div>
            </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-2">
          <div class="card card-min-height" >
            <img src="assets/images/back.jpg" class="card-img-top skill-cat-logo" alt="..." >
              <div class="card-body text-center">
                 <div class="row">
                  <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/php.png" class="skill-logo">
                  </div>
                  <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/codeigniter.png" class="skill-logo">
                  </div>
                   <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/node.jpg" class="skill-logo">
                  </div>
                   <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/django.jpg" class="skill-logo">
                  </div>
                   <div class="col-lg-6 col-sm-4 mt-2">
                     <img src="assets/images/laravel.jpg" class="skill-logo">
                  </div>               
                </div>                             
              </div>
          </div>
      </div>
     <div class="col-lg-4 col-md-4 mt-2">
      <div class="card card-min-height" >
           <img src="assets/images/database.jpg" class="card-img-top skill-cat-logo" alt="..." style="">
             <!--  <h5 class="text-center skills-cat">Databases</h5> -->
              <div class="card-body text-center" >
                 <div class="row">
                  <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/mysql.png" class="skill-logo">
                  </div>
                  <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/mongo.png" class="skill-logo">
                  </div>
                   <div class="col-lg-6 col-sm-4">
                     <img src="assets/images/sqlite.png" class="skill-logo">
                  </div>
                 
                
                </div>            
              </div>
          </div>
       </div>  
     </div>
   </div>  <!-- id skills end -->
 </div> <!-- class skills end -->

  
<div  id="projects" class="projects-portion" >
     <h2 class="experience text-center">Portfolio</h2>
     <div class="row portfolio" style="">
       <div class="col-lg-6">
         <img src="assets/images/voting.png" class="gif" style="">
         <!--  <button  class="visit-site" data-toggle="tooltip" data-placement="top" title="Visit Site"> <span class="fa fa-search"></span></button> -->
          <button data-href="https://github.com/JerecoPiso/voting_poll.git" class="view-code" data-toggle="tooltip" data-placement="top" title="View Code"> <span class="fa fa-eye"></span></button>
     
             
       </div>
       <div class="col-lg-6 project-desc">
         <p>  <b class="portfolio-fs">Voting Poll</b> is an web app that allows you to create multiple voting poll that can be used in different types of voting.
          </p>
           <p class="functionalities">Features</p>
             <ul>
                <li>Register as voter</li>
                <li>Vote</li>
                <li>Create admin</li>
              
             </ul>
              <p class="technologies-used">Technologies Used</p>
             <ul>
                <li>Codeigniter 3</li>
                <li>VueJs</li>
                <li>Axios</li>
                <li>MySQL</li>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JQuery</li>
             </ul>
       </div>
     </div>
       <div class="row portfolio" >
       <div class="col-lg-6">
         <img src="assets/images/exam.png" class="gif">
       <!--   <button class="visit-site" data-toggle="tooltip" data-placement="top" title="Visit Site"> <span class="fa fa-search"></span></button> -->
         <button class="view-code" data-toggle="tooltip" data-placement="top" title="View Code"> <span class="fa fa-eye"></span></button>
       </div>
       <div class="col-lg-6 pl-4 project-desc">
         <p>  <b class="portfolio-fs">Online Examination System</b> is conducting a test online to measure the knowledge of the participants on a given topic. With online examination students can do the exam online, in their own time, with their own device, regardless of where they live. You only need a browser and an internet connection. 
          </p>
           <p class="functionalities">Features</p>
             <ul>
                <li>Create Account</li>
                <li>Login Account</li>
                <li>Take exam w/ a limited time</li>
                <li>View who already taken tha exam </li>
             </ul>
              <p class="technologies-used">Technologies Used</p>
             <ul>
                <li>PHP</li>
                <li>JQuery</li>
                <li>MySQL</li>
                <li>HTML5</li>
                <li>CSS3</li>
             </ul>
       </div>
     </div>
</div>



<footer id="footer" style="background-color: rgb(255, 0, 102)">
    <div class="">
      <div class="text-white text-center p-4" style="border: 1px solid  #99ccff;">
          © 2021. Jereco James Piso.<br>
          All Rights Reserved.
      </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/jquery.js"></script>   
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

</script>
</body>
</html>
