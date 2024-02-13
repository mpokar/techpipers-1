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
    <link rel="stylesheet" href="./Assets/css/css1.css">
    <link rel="stylesheet" href="./Assets/css/global.css" />
    <link rel="stylesheet" href="./Assets/css/index.css" />
    <link rel="stylesheet" href="./Assets/css/index1.css" />
    <link rel="stylesheet" href="./Assets/css/global1.css" />
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
      <header class="masthead-about" style="height: 0vh;">
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent navbar-dark navbar-custom">
          <div class="container">
            <a class="navbar-brand" href="index.php"><img class="logo" src="./Assets/images/Colour_Inline-Stack_Solid-Submark.png" alt=""></a>
            <button class="navbar-toggler custom-dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav nav-dropdown">
                <li class="nav-item">
                  <a class="nav-link" style="font-weight: 900 !important;font-size: 17px !important; color: #d91d1b !important;" href="#"><b>About Us</b></a>
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
              <h1 class="f2-head" style="font-family: var(--font-montserrat); font-weight:200;">TECH PIPERS <br></h1>
              <h1 class="f3-head" style="font-family: var(--font-montserrat); font-weight:700;"><b>ABOUT US</b></h1>
            </div>
          </div>
        </div>
      </header>
      

      <section class="info-frame">
        <h3 class="what-you-may">What you may ask, is a Tech Piper?</h3>
        <div class="historical-frame">
          <div class="throughout-history-pipers">
            Throughout history, pipers have led charges and provided signals to
            troops in battle as well as ships at sea. In today's IT driven
            business landscape, we work at the forefront with companies looking
            to leverage technology to provide business advantages.
          </div>
          <img
            class="isolation-mode-icon1"
            loading="eager"
            alt=""
            src="./Assets/images/isolation-mode-1@2x.png"
          />
        </div>
      </section>
      <section class="difference-frame">
        <div class="unlike-other-companies-container">
          <p class="unlike-other-companies-in-the">
            <b class="unlike-other-companies"
              >Unlike other companies in the sector,
            </b>
            <span
              >Tech Piper doesn't simply focus on the technological solution.
              Instead we focus on business solutions that are driven by
              technology. We might build a website or an application but we know
              that it's really a sales hub or an engagement portal. In other
              words, we know the difference between what it is and what it does.
            </span>
          </p>
          <p class="blank-line">&nbsp;</p>
          <p class="we-start-with">
            We start with a fundamental understanding of your business
            objectives. Then we apply the tech solution that best fits your
            company. We are a team of IT and Management professionals with over
            two decade's proven experience in ideating, developing and
            implementing purpose-built outcome-oriented IT solutions. Our vision
            is to be a leading IT and IT Enabled Solutions partner and enable
            business transformation. How can we help you?
          </p>
        </div>
      </section>
<?php include 'footer.php';?>
    </div>

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
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>
