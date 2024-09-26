<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="shortcut icon" href="{{ asset('assets/img/profile.jpeg') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/index.js') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">\
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
            <img src="{{ asset("assets/img/profile.jpeg") }}" class="profile" alt="Naufal Afif">
        </figure>

        <div class="info-content">
          <h1 class="name" title="naufallafif">Naufal Afif</h1>

          <p class="title">Junior Front-End</p>
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

              <a href="mailto:naufalafif2207@gmail.com" class="contact-link">naufalafif2207@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="https://wa.me/081381683883" class="contact-link">+62 813-8168-3883</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">July 22, 2002</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Tangerang Selatan, Indonesia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.linkedin.com/in/naufallafif/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/naufallafif" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/naufallafif" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>


    <div class="main-content">
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

         

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Hello Everyone  Im Naufal Afif, you can Call me Afif.
          </p>

          <p>
            II am a 22-year-old fresh graduate with a strong background in Information Systems, eager to take on new challenges that will allow me to enhance my skills. I am a hard worker with a proven ability to work effectively in teams, solve problems, and continuously learn. I am passionate about contributing to a growth-oriented organization where I can apply my knowledge and grow professionally.
          </p>
        </section>


        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                  <img src="{{ asset("assets/img/icon-design.svg") }}" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a Competent Level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                  <img src="{{ asset("assets/img/icon-dev.svg") }}" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the Beginner level.
                </p>
              </div>

            </li>



          </ul>

        </section>


        <!--Friend Project
        -->

        <section class="fp">

          <h3 class="h3 fp-title">My Friend Project</h3>

          <ul class="fp-list has-scrollbar">

            <li class="fp-item">
              <div class="content-card" data-fp-item>

                <figure class="fp-avatar-box">
                  <img src="{{ asset("assets/img/helmi.jpeg") }}" alt="Helmi" width="60" data-fp-avatar>
                </figure> 

                <h4 class="h4 fp-item-title" data-fp-title>Ahmad Helmy Nurfaizi</h4>

                <div class="fp-text" data-fp-text>
                  <p>
                    Ahmad Helmy Nurfaizi or commonly called Helmi is my fellow student who has just graduated, he is a System Analyst in the project in my team.
                  </p>
                </div>

              </div>
            </li>

            <li class="fp-item">
              <div class="content-card" data-fp-item>

                <figure class="fp-avatar-box">
                    <img src="{{ asset("assets/img/rakha.png") }}" alt="Rakha" width="60" data-fp-avatar>
                </figure>

                <h4 class="h4 fp-item-title" data-fp-title>Rakha Fawwaz Aryaghuna</h4>

                <div class="fp-text" data-fp-text>
                  <p>
                    Rakha Fawwaz Aryaghuna or commonly called  Rakha is my fellow student who just graduated, he is a UI/UX Design in the project in my Team.
                  </p>
                </div>

              </div>
            </li>

            <li class="fp-item">
              <div class="content-card" data-fp-item>

                <figure class="fp-avatar-box">
                    <img src="{{ asset("assets/img/thaufiq.jpeg") }}" alt="Thaufiq" width="60" data-fp-avatar>
                </figure>

                <h4 class="h4 fp-item-title" data-fp-title>Thaufiq Saputra Zulty</h4>

                <div class="fp-text" data-fp-text>
                  <p>
                    Thaufiq Saputra Zulty or commonly called Thaufiq is my fellow student who just graduated, he is a UI/UX Design in the project in my Team.
                  </p>
                </div>

              </div>
            </li>

            <li class="fp-item">
              <div class="content-card" data-fp-item>

                <figure class="fp-avatar-box">
                    <img src="{{ asset("assets/img/alif.jpeg") }}" alt="Alif" width="60" data-fp-avatar>
                </figure>

                <h4 class="h4 fp-item-title" data-fp-title>Alif Ndaru Kusuma</h4>

                <div class="fp-text" data-fp-text>
                  <p>
                    Alif Ndaru Kusuma or commonly called Alif is my fellow student who just graduated, he is a Back End Developer in the project in my Team.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - fp modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="fp-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>


          </section>

        </div>    
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

              <h4 class="h4 timeline-item-title">Mercu Buana University</h4>
              <span class="date">August 2020 - June 2024</span>
              <span>Majoring in Information System with Grade 3.62/4.00</span>

              <p class="timeline-text justify">
                
I hold a Bachelor degree in Information Systems from Mercu Buana University, where I achieved a GPA of 3.62. Throughout my studies, I developed a solid understanding of computer networking principles, including configuration and information security, to ensure data integrity and availability. Additionally, I honed my skills in web development, working with HTML, CSS, and JavaScript, while emphasizing design and user experience. My coursework also included data analysis, where I learned to collect, process, and analyze data to support data-driven decision-making using tools such as Excel and SQL. This combination of skills equips me to contribute effectively to technology projects and help organizations achieve their business objectives.

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMAN 3 Tangerang</h4>

              <span>Social</span>
              <span class="date">2017 - April 2020</span>

              <p class="timeline-text">
                I graduated from SMA Negeri 3 Tangerang, specializing in Social Sciences. During my time there, I developed a strong foundation in social studies, including economics, sociology, and psychology, which enhanced my analytical and critical thinking skills. This background has provided me with valuable insights into human behavior and societal trends, preparing me for further studies in the field of Information Systems.
              </p>

            </li>
          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience </h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Front End Developer</h4>
              <span>PT. Support Sentra Service - Internship</span>
              <span class="date">Januari 2023 - April 2023</span>

              <p class="timeline-text">
                During my internship at PT Support Sentra Service (SSS) in the IT division, I worked as a Front End Developer on a Certification Website project. I utilized PHP with the Laravel framework for the back end. My responsibilities included completing tasks assigned through the SCRUM methodology, which involved developing various components such as the login page, registration page, question page, home page, dashboard, and password recovery feature. This experience allowed me to enhance my technical skills while collaborating effectively within a team.
              </p>

            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Front End Developer</h4>
              <span>Eventdemic - Project</span>
              <span class="date">January 2022 - June 2022</span>
              <p class="timeline-text">
                Developed an event registration website using the CodeIgniter 3 framework, implementing a CRUD (Create, Read, Update, Delete) system with a MySQL database. The project involved designing user-friendly interfaces for event registration, managing participant data, and ensuring seamless interactions with the database. This experience enhanced my skills in web development and database management, allowing me to deliver a functional and efficient application.
              </p>
            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Front End Developer</h4>
              <span>GEMASTIK XV KEMENDIKBUD - Smart City</span>
              <span class="date">October 2022</span>
              <p class="timeline-text">
                Participated in the GEMASTIK tournament organized by KEMENDIKBUD in the Smart City division as a Front End Developer. I contributed to the development of a web-based application for disaster management using CCTV technology. My role involved creating an intuitive user interface that facilitated real-time monitoring and data visualization, enabling effective response to natural disasters. This experience honed my technical skills and provided valuable insights into the intersection of technology and urban management
              </p>
            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">MS Office</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">HTML / CSS</h5>
                <data value="85">85</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Php - Laravel</h5>
                <data value="65">65%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 65%;"></div>
              </div>

            </li>

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">JavaScript</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">Python</h5>
                <data value="60">60%</data>
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

          
          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

          </div>

          <ul class="project-list center">
            <li class="project-item  active">
              <a href="https://inboxed.id/">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                   <img src="{{ asset("assets/img/inboxed.png") }}" alt="arrival" loading="lazy">
                </figure>
                <h3 class="project-title">InBoxed</h3>  
                <p class="project-category">Front End Developer</p>

              </a>
            </li>
          </ul>
        </section>
      </article>
      
      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.064241090305!2d106.69729337486194!3d-6.255267361243882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa677d3194cf%3A0x7e18dd088dc0b176!2sPondok%20Kacang%20Prima!5e0!3m2!1sen!2sid!4v1706543515275!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

  <script src="./assets/js/index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>