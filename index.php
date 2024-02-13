<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Pipers</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./Assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./Assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./Assets/css/css1.css">
    <link rel="stylesheet" href="./Assets/css/global.css" />
    <link rel="stylesheet" href="./Assets/css/index.css" />
    <link rel="stylesheet" href="./Assets/css/animation.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
    />
    <!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery for Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) { // Adjust this value based on your preference
      navbar.classList.add('navbar-custom-color', 'navbar-light');
      navbar.classList.remove('bg-transparent', 'navbar-dark');
    } else {
      navbar.classList.add('bg-transparent', 'navbar-dark');
      navbar.classList.remove('navbar-custom-color', 'navbar-light');
    }
  });
</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
        <!-- preloader start here -->
	<!--<div class="preloader">-->
	<!--	<div class="preloader-inner">-->
	<!--		<div class="preloader-icon">-->
	<!--			<span></span>-->
	<!--			<span></span>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- preloader ending here -->
      <header class="masthead">
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent navbar-dark navbar-custom">
          <div class="container">
            <a class="navbar-brand" href="#"><img class="logo" src="./Assets/images/Colour_Inline-Stack_Solid-Submark.png" alt=""></a>
            <button class="navbar-toggler custom-dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav nav-dropdown" style=" font-family: var(--font-roboto); font-weight:900; font-size: 17px;">
                <li class="nav-item">
                  <a class="nav-link" href="About-us.php"><b>About Us</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Who-we-are.php"><b>Who We Are</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Success-story.php"><b>Success Stories</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="How-we-work.php"><b>How We Work</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Capabilities-Services.php"><b>Capabilities & Services</b></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
         
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="f2" style="font-family: var(--font-montserrat); font-weight:200;">TECHNOLOGY & DEVELOPMENT <br></h1>
              <h1 class="f3" style="font-family: var(--font-montserrat); font-weight:700;"><b>SERVICES YOU CAN TRUST</b></h1>
              <p class="f4">Our vision is to be a leading IT and IT Enabled Solutions partner and enable business transformation. We are a team of IT and Management professionals over two decade’s proven experience in ideating, developing and implementing purpose-built outcome-oriented IT solutions.</p>
              <!--<a href="Who-we-are"><button class="custombtn "><b>Who We Are</b></button></a>-->
              <div class="buttons">
    <button class=" btn-hover color-1">Who We Are</button> </div>
              
            </div>
          </div>
        </div>
      </header>
      <section class="info-box">
        <div class="header-application-development">
          <div class="group-frame-wrapper">
            <div class="group-frame">
              <img class="group-frame-child" loading="eager" alt="" src="./Assets/images/group-1171275942@2x.png" />
              <!-- <div class="rectangle-shape"></div> -->
            </div>
          </div>
          <h2 class="what-we-do">WHAT WE DO</h2>
          <img class="header-application-development-child" loading="eager"  alt=""  src="./Assets/images/group-1171275942@2x.png"  />
        </div>
        <div class="frames-column">
          <div class="application-development-sectio hover-animation bounce">
            <div class="mobile-apps-section">
              <img class="header-icon" loading="eager" alt="" src="./Assets/images/header@2x.png"/>
              <div class="application-development">
                <p class="application">Application</p>
                <p class="development">Development</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio1 hover-animation bounce">
            <div class="header-parent">
              <img class="header-icon1" alt="" src="./Assets/images/header-1@2x.png" />

              <div class="mobile-apps-development-container">
                <p class="mobile-apps">Mobile Apps</p>
                <p class="development1">Development</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio2 hover-animation bounce">
            <div class="header-group">
              <img class="header-icon2" alt="" src="./Assets/images/header-2@2x.png" />

              <div class="e-commerce-solutions-container">
                <p class="e-commerce">E Commerce</p>
                <p class="solutions">SolutionS</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio3 hover-animation bounce">
            <div class="header-container">
              <img class="header-icon3" alt="" src="./Assets/images/header-3@2x.png" />

              <div class="crm-and-saas-container">
                <p class="crm-and-saas">CRM and Saas Solutions</p>
                <p class="development2">Development</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio4 hover-animation bounce">
            <div class="frame-div">
              <img class="header-icon4" alt="" src="./Assets/images/header-4@2x.png" />

              <div class="qa-services">
                <p class="qa">QA</p>
                <p class="services">Services</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio5 hover-animation bounce">
            <div class="header-parent1">
              <img class="header-icon5" alt="" src="./Assets/images/header-5@2x.png" />

              <div class="tech-it-container">
                <p class="tech-it">Tech & IT</p>
                <p class="product">Product</p>
                <p class="testing">Testing</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio6 hover-animation bounce">
            <div class="header-parent2">
              <img class="header-icon6" alt="" src="./Assets/images/header-6@2x.png" />

              <div class="data-analytics">
                <p class="data">Data</p>
                <p class="analytics">Analytics</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio7 hover-animation bounce">
            <div class="header-parent3">
              <img class="header-icon7" alt="" src="./Assets/images/header-7@2x.png" />

              <div class="application-support-and-container">
                <p class="application1">Application</p>
                <p class="support-and">Support and</p>
                <p class="maintenance">Maintenance</p>
              </div>
            </div>
          </div>
          <div class="application-development-sectio8 hover-animation bounce">
            <div class="header-parent4">
              <img class="header-icon8" alt="" src="./Assets/images/header-8@2x.png" />

              <div class="cloud-services">
                <p class="cloud">Cloud</p>
                <p class="services1">Services</p>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php include 'footer.php';?>

    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>
