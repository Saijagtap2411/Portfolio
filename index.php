<?php
// Path to the file where visitor count is stored
$countFile = "visitor-count.txt";

// Check if the file exists, if not, create it with an initial value of 0
if (!file_exists($countFile)) {
    file_put_contents($countFile, "0");
}

// Read the current visitor count
$currentCount = file_get_contents($countFile);

// Increment the count
$newCount = $currentCount + 1;

// Update the visitor count in the file
file_put_contents($countFile, $newCount);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sai Jagtap Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Om Kharche" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Om Kharche">Sai Jagtap</h1>

          <p class="title">Application Developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:omtestmail@gmail.com" class="contact-link">Saijagtap2411@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">+91 7039412056</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">1 February, 2000</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Navi Mumbai, India</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.linkedin.com/in/sai-jagtap-4472b7234/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/Saijagtap2411" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://drive.google.com/file/d/1M2Mf6hdv0va2JJQua4i7G3HCC5nEMG0p/view?usp=drive_link" class="social-link">
              <ion-icon name="document-text"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>


   




    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <!-- <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li> -->

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Hello! I'm an application developer and freelancer from Navi Mumbai, Maharashtra, India.
            I specialize in creating responsive websites, web applications, and mobile apps that are both functional and user-friendly. My approach focuses on building intuitive, clean designs that provide a seamless user experience while addressing the unique requirements of each project.
          </p>

          <p>
            I have experience working with a variety of technologies, including front-end development with HTML, CSS, JavaScript, and Angular, and back-end development with PHP, MySQL, Wordpress and Java. For mobile app development, I create Android apps using Java and Android Studio, ensuring that your app delivers an optimal experience across devices.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Mobile apps</h4>

                <p class="service-item-text">
                  Professional development of applications for Android.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Software development</h4>

                <p class="service-item-text">
                  I make high-quality of Software at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Rohit Patil</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai was hired to create a Website. We were very pleased with the work done. Hhe has a
                    lot of experience
                    and is very concerned about the needs of client. 
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Dipti Sinha</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai was hired to create a Software. We were very pleased with the work done. He has a
                    lot of experience
                    and is very concerned about the needs of client. 
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai was hired to create a Web Application. We were very pleased with the work done. He has a
                    lot of experience
                    and is very concerned about the needs of client. 
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Sai was hired to create a Mobile App. We were very pleased with the work done. He has a
                    lot of experience
                    and is very concerned about the needs of client.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 September, 2023</time>

              <div data-modal-text>
                <p>
                  Sai was hired to create a Web Application. We were very pleased with the work done. He has a
                  lot of experience
                  and is very concerned about the needs of client.
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="https://regalmepconsultants.com/">
                <img src="./assets/images/regal.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://lumetrisoul.com/">
                <img src="./assets/images/ls.png" alt="client logo"  class="bigimg">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://lumetrisoul.com/">
                <img src="./assets/images/lumetric.png" alt="client logo" style="margin-top: 6vh;">
              </a>
            </li>

            <li class="clients-item">
              <a href="http://mauliinfraenterprises.com/">
                <img src="./assets/images/mauli.png" alt="client logo" style="margin-top: 6vh;">
              </a>
            </li>

            <li class="clients-item">
              <a href="http://kautilyabharat.com/">
                <img src="./assets/images/kbf.png" alt="client logo">
              </a>
            </li>

            <!-- <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li> -->

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Sinhgad Institute of Management</h4>

              <span>2021 — 2023</span>

              <p class="timeline-text">
                Master Of Computer Application
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Sinhgad College of Commerce</h4>

              <span>2018 — 2021</span>

              <p class="timeline-text">
                Bachelor of Business Adminstration and Computer Application
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Christ Academy Junior College</h4>

              <span>2016 — 2018</span>

              <p class="timeline-text">
                HSC in Commerce
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Sai Holy Faith High School</h4>

              <span>2016</span>

              <p class="timeline-text">
                SSC
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Application Developer</h4>

              <span>Duration : 1 Year</span>

              <p class="timeline-text">
                KAUTILYA BHARAT 
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title"> Web Developer</h4>

              <span> Duration : 3 Month</span>

              <p class="timeline-text">
                MAULI INFRA ENTERPRISES
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Software Developer Internship</h4>

              <span>Duration : 3 Month</span>

              <p class="timeline-text">
                iVIEW LOGIC
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web Development and Designing Internship</h4>

              <span>Duration : 3 Month</span>

              <p class="timeline-text">
                PHN Technology
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Java Development Internship</h4>

              <span>Duration : 1 Month</span>

              <p class="timeline-text">
                OASIS INFOBYTE 
              </p>

            </li>


          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Application development</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Software development</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WordPress</h5>
                <data value="50">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://github.com/Saijagtap2411/Bus-Booking-System-">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  
                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Bus Booking System</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">E-Student Portal</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://kautilyabharat.com/">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Kautilya Bharat</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="https://drive.google.com/file/d/16hucV8SXvaQsqGHx5YiuIIcdACZxDWpA/view?usp=drive_link">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">kbf</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://regalmepconsultants.com">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Regal</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="http://mauliinfraenterprises.com/">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Mauli Infra Enterprises</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://bdit.in/skinfrastructure/">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">SK Infra</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://github.com/Saijagtap2411/Animation_Website">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Animation Website</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://github.com/Saijagtap2411/Spring_Boot-Project">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Employee Management</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <!-- <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>

          </ul>

        </section>

      </article> -->





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d73.0149!3d19.1058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7f7b6a18db389%3A0xfdbd58f21b46c8e!2sKopar%20Khairane%2C%20Navi%20Mumbai%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sin!4v1647608789441!5m2!1sen!2sin"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>


  <!-- Visitor Count Box -->
  <div class="visitor-count-box">
    <ion-icon name="eye-outline"></ion-icon>
    <span id="visitor-count"><?php echo $newCount; ?></span>
  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>


</body>

</html>