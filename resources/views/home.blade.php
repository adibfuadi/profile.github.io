<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="../assets/images/my.jpeg" type="image/x-png">
    <title>Portfolio | Muhammad Adib Fuadi</title>
</head>
{{-- oncontextmenu="return false" --}}
<body oncontextmenu="return false">

<!-- pre loader -->
<!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->

<!-- navbar starts -->
<header>
        <a href="/" class="logo"><i class="fab fa-node-djs"></i> Adib</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            {{-- <li><a href="#contact">Contact</a></li> --}}
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Hi There,<br/> I'm Muhammad <span>Adib</span></h2>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/muhammad-adibfuadi-274b80240/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com/adibfuadi?tab=repositories" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me/adibfuadi" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          {{-- <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/asd.dev"><i class="fab fa-instagram" target="_blank"></i></a></li> --}}
          {{-- <li><a class="dev" aria-label="Dev" href="https://dev.to/asd" target="_blank"><i class="fab fa-dev"></i></a></li> --}}
        </ul>
      </div>
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="./assets/images/me.jpeg" alt="">
</div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/my12.jpeg" alt="">
    </div>
    <div class="content">
        <h3>I'm Adib</h3>
        <span class="tag">Web Developer</span>
        
        <p>I am a Web developer based in Jakarta, Indonesia. 
          I am an Information Technology undergraduate from Budiluhur University.
          I am very passionate about improving my coding skills & developing applications & websites.
          I build WebApps and Websites using Laravel or Codeigniter.
          Working for myself to improve my skills.
          Love to build Website. </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> age: </span> 26</p>
              <p><span> phone : </span> +62 877-8042-7860</p>
            </div>
            <div class="box">
              <p><span> email : </span> adibfuadimuhammad@gmail.com</p>
              <p><span> place : </span> Jakarta, Indonesia</p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="/downloadcv" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">

              <div class="bar">
                  <div class="info">
                      <img src="../assets/images/laravel.png">
                      <span>Laravel</span>
                    </div>
                </div> 
                <div class="bar">
                    <div class="info">
                        <img src="../assets/images/codeigniter.png" width="45px">
                        <span>CodeIgniter</span>
                    </div>
                </div> 
                <div class="bar">
                  <div class="info">
                    <img src="https://img.icons8.com/color/48/000000/mysql-logo.png"/>
                    <span>MySQL</span>
                  </div>
                </div> 
                <div class="bar">
                  <div class="info">
                    <img src="https://img.icons8.com/color/48/000000/bootstrap.png"/>
                    <span>Bootstrap</span>
                  </div>
                </div> 

      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <img draggable="false" src="./assets/images/educat/bl.jpg" alt="">
        </div>
        <div class="content">
        <h3>Bachelor of Information Systems in Information Technology</h3>
        <p>Budi Luhur University</p>
        <h4>2014-2018 | Completed</h4>
        </div>
    </div>

</div>
</section>
<!-- education section ends -->


<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

  <div class="box-container">

    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/portfolio1.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            {{-- <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/ittihad.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>The Foundation's website profile Khoirul Ittihad Indonesia</p>
          <div class="btns">
            {{-- <a href="https://ittihadindonesia.org/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/kuis.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Application Website</h3>
        </div>
        <div class="desc">
          <p>Portfolio application website. Quiz application</p>
          <div class="btns">
            {{-- <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/eform.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Application Website</h3>
        </div>
        <div class="desc">
          <p>Portfolio application website. BccEform for change schedule, leave, cut leave, sick, request off</p>
          <div class="btns">
            {{-- <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/document.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Application Website</h3>
        </div>
        <div class="desc">
          <p>Portfolio application website. Document App for monitoring document</p>
          <div class="btns">
            {{-- <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/ticket.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Application Website</h3>
        </div>
        <div class="desc">
          <p>Portfolio application website. Helpdesk app for agent who got a trouble in pc or network</p>
          <div class="btns">
            {{-- <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a> --}}
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="box tilt">
      <img draggable="false" src="./assets/images/projects/tnr.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Application Website</h3>
        </div>
        <div class="desc">
          <p>Portfolio application website. This App for input data for Trade Remmitance team</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div> --}}

</div>

{{-- <div class="viewall">
  <a href="/projects" class="btn"><span>View All</span>
    <i class="fas fa-arrow-right"></i>
</a>
</div> --}}

</section>
<!-- work project section ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>
  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Bank Negara Indonesia</h2>
        </div>
        <div class="desc">
            <h3>Information Technology Development</h3>
            <p>Apr 2021 - present</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Freelancer</h2>
        </div>
        <div class="desc">
            <h3>Web Developer</h3>
            <p>Dec 2022 - present</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>CV Mitra Jaya, Dealer Honda</h2>
        </div>
        <div class="desc">
            <h3>System Development</h3>
            <p>May 2018 - Apr 2021</p>
        </div>
      </div>
    </div>

  </div>

  {{-- <div class="morebtn">
    <a href="/experience" class="btn"><span>View All</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div> --}}

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
{{-- <section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact1.png" alt="">
      </div>
    <form id="contact-form">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section> --}}
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Adib's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep Rising 🚀. Connect with me over WA chat!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+62 877-8042-7860</p>
          <p> <i class="fas fa-envelope"></i>adibfuadimuhammad@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Jakarta, Indonesia</p>
          <div class="share">

              <a href="https://www.linkedin.com/in/muhammad-adibfuadi-274b80240/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/adibfuadi?tab=repositories" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:adibfuadimuhammad@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://twitter.com/" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
              {{-- <a href="https://t.me/lifecode5" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a> --}}
          </div>
      </div>
  </div>

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/jigar-sable"> Adib Fuadi</a></h1>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="../assets/js/particles.min.js"></script>
<script src="../assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="../assets/js/script.js"></script>

</body>
</html>
