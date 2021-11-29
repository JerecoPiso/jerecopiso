<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">

</head>
<body>
    <div class="main-page" id="main-page">
        <div class="content">
           <div class="logo">
               <img src="assets/images/hehe.png" alt="" srcset="">
           </div>
            <div id="top-nav">
                <button type="button" id="bars"> <span class="fa fa-bars"></span> </button>
                <ul id="nav">
                    
                    <li><a href="javascript:void(0)" onclick="toAboutme()">About Me</a></li>
                    <li><a href="javascript:void(0)" onclick="toSkills()">Skills</a></li>
                    <li><a href="javascript:void(0)" onclick="toPortfolio()">Portfolio</a></li>
                    <li><a href="">Home</a></li>
                  
                </ul>
                
            </div>
    
            <div class="profile">
                
                <img src="assets/images/dp.jpg" alt="dp.jpg" class="dp">
                <p class="name">Hi,  I'm <strong>Jereco James Piso</strong> </p>
                <p class="expertise">| Freelance Web Developer |</p>
                <button type="button" class="hire-me">Hire Me</button>
              
            </div>
        </div>
      
    </div>
    <!-- portfolios -->
    <div class="portfolios" id="portfolio">
        <p>Portfolio</p>
        <div class="flex" >
            <div class="flex-item">
                <div class="card mr-1 ml-1">
                    <img src="assets/images/codeunity.png" alt="">
                    <div class="card-content">
                        <p class="app-name">CodeUnity</p>
                        <!-- <p class="app-desc"> <b>Codeunity</b>  is a helpful platform for developers it has a functionalities like in stackoverflow where the user can post their problem etc.</p> -->
                        <p class="view-app">  <a href="https://codeunity.herokuapp.com/" > <span class="fa fa-eye"></span> View Website</a></p>
                      
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <div class="card mr-1 ml-1">
                    <img src="assets/images/chatapp.png" alt="">
                    <div class="card-content">
                        <p class="app-name">Real Time Chat Application</p>
                        <!-- <p class="app-desc"> <b>Real Time Chat Application</b>  is an web based app that can make the user communicate/chat in real time.</p> -->
                        <p class="view-app">  <a href="https://github.com/JerecoPiso/chat_app" > <span class="fa fa-eye"></span> View Code</a></p>
                    </div>
                </div>
            </div>
            <div class="flex-item" >
                <div class="card mr-1 ml-1">
                    <img src="assets/images/voting.png" alt="">
                    <div class="card-content">
                        <p class="app-name">Voting Poll System</p>
                        <!-- <p class="app-desc"><b>Voting Poll System</b> is an web app that allows you to create multiple voting poll that can be used in different types of voting.</p> -->
                        <p class="view-app">  <a href="https://github.com/JerecoPiso/voting_poll" ><span class="fa fa-eye"></span> View Code</a></p>
                    </div>
                </div>
            </div>
            <div class="flex-item" >
                <div class="card mr-1 ml-1">
                    <img src="assets/images/ltipc.png" alt="">
                    <div class="card-content">
                        <p class="app-name">LTIPC Management System  </p>
                        <!-- <p class="app-desc"><b>LTIPC Management System</b> is now being used in the main office of Leyte Tourism Investment & Promotion Center.</p> -->
                        <p class="view-app">  <a href="" > <span class="fa fa-lock"></span> Private</a></p>
                    </div>
                </div>
            </div>

            <div class="flex-item" >
                <div class="card mr-1 ml-1">
                    <img src="assets/images/dts.png" alt="">
                    <div class="card-content">
                        <p class="app-name">EVSU-Tanauan DTS</p>
                        <!-- <p class="app-desc"><b>EVSU-Tanauan Document Tracking System</b> .</p> -->
                        <p class="view-app">  <a href="" > <span class="fa fa-lock"></span> Private</a></p>
                    </div>
                </div>
            </div>
            <div class="flex-item" >
                <div class="card mr-1 ml-1">
                    <img src="assets/images/exam.png" alt="">
                    <div class="card-content">
                        <p class="app-name">Examination System</p>
                        <!-- <p class="app-desc"><b>EVSU-Tanauan Document Tracking System</b> .</p> -->
                        <p class="view-app">  <a href="https://github.com/JerecoPiso/exam" > <span class="fa fa-eye"></span> View Code</a></p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- skills -->
    <div class="skills" id="skills">
        <p>SKILLS</p>
        <div class="skills-category">
           
            <div class="category">
                <p class="categories">Frontend</p>
                <div class="languages">
                    <img src="assets/images/html5.png" alt="">
                    <img src="assets/images/css3.png" alt="">
                    <img src="assets/images/bootstrap4.png" alt="">
                    <img src="assets/images/jquery.png" alt="">
                    <img src="assets/images/materialize.png" alt="">
                    <img src="assets/images/vue.png" alt="">
                </div>
            </div>
            <div class="category">
                <p class="categories">Backend</p>
                <div class="languages">
                    <img src="assets/images/laravel.jpg" alt="">
                    <img src="assets/images/django.jpg" alt="">
                    <img src="assets/images/php.png" alt="">
                    <img src="assets/images/codeigniter.png" alt="">
                    <img src="assets/images/sqlite.png" alt="">
                    <img src="assets/images/mysql.png" alt="">
                    <img src="assets/images/node.jpg" alt="">
                    <img src="assets/images/postgresql.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- about me -->
    <div class="about-me" id="aboutme">
        <p>ABOUT ME</p>
        <div class="bio">
            <div class="aboutme-dp">
                <img src="assets/images/dp.jpg" alt="">
            </div>
            <div class="bios">
                <p class="my-name">I'm Jereco James Piso </p>
                <p class="extra-info">I have 3 years experienced in web development and still continuing learning more and new technologies to hone my skills in web development.</p>
                <ul>
                    <li><span class="fa fa-map-marker"></span>Brgy. Cabangcalan Sta. Fe Leyte Philippines</li>
                    <li><span class="fa fa-phone"></span>(+63) 9518227186</li>
                    <li><span class="fa fa-envelope"></span>jamesjerecopiso@gmail.com</li>
   
                </ul>
                <p class="view-resume"><a href="resume.pdf" >View Resume</a></p>

            </div>
        </div>
    </div>
    <button type="button" id="moveToTop" onclick="toTop()">	&uarr; </button>
    <!-- footer -->
    <footer>
        All Rights Reserved <span id="year"></span>
    </footer>
<script>
    // put year on the footer
    var date = new Date()
    document.getElementById('year').innerHTML = date.getFullYear()

    function moveToTop() {
        var toTopBtn = document.getElementById('moveToTop')
        if(document.body.scrollTop > page.offsetHeight || document.documentElement.scrollTop > page.offsetHeight){
            toTopBtn.style.display = 'block'
        }else{
            toTopBtn.style.display = 'none'
        }
    }
  
    window.onscroll = function(){
            moveToTop()
    }
 
    var showBtn = document.getElementById('bars')
    var status = 'close'
    showBtn.addEventListener('click', function show(){
            if(status == "close"){
                status = 'open'
                document.getElementById('nav').style.top = '0'
            }else{
                status = 'close'
                document.getElementById('nav').style.top = '-100%'
            }

            document.getElementById('nav').style.transition = '0.5s'
    })
    var page = document.getElementById('main-page')
    var portfolio = document.getElementById('portfolio')
    var skills = document.getElementById("skills")
    
    function toTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    }
    function toPortfolio(){
      window.scrollTo({
          top: page.offsetHeight,
          behavior: 'smooth'
          
      })
   }
   function toSkills(){
      window.scrollTo({
          top: page.offsetHeight + portfolio.offsetHeight,
          behavior: 'smooth'
          
      })
   }
   function  toAboutme() {
    window.scrollTo({
        top: page.offsetHeight + portfolio.offsetHeight + skills.offsetHeight,
        behavior: 'smooth'
    })
   }
</script>
</body>
</html>