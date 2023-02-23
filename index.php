<?php
include 'element/header.php';
include 'element/nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Fresh Graduate Software Engineer" />
  <meta name="author" content="Un Jun Jie" />
  <meta property="og:title" content="Un Jun Jie | Fresh Graduate Software Engineer" />
  <meta property="og:site_name" content="Un Jun Jie Portfolio" />
  <meta property="og:url" content="https://www.jjie1111.com/" />
  <meta property="og:description" content="Fresh Graduate Software Engineer" />
  <meta property="og:type" content="website" />

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- js jquery -->
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>



  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QD9ESD1D9K"></script>
  <script>
    window.dataLayer = window.dataLayer || []

    function gtag() {
      dataLayer.push(arguments)
    }
    gtag('js', new Date())

    gtag('config', 'G-QD9ESD1D9K')
  </script>
</head>

<body>
  <!-- Cover -->
  <section id="home" class="homecover">
    <div class="homecover__content">
      <h1 class="heading-primary">Un Jun Jie</h1>
      <div class="homecover__info">
        <p class="text-primary">
          Fresh Graduate Software Engineer
        </p>
      </div>
      <div class="homecover__btn">
        <button class="btn btn--bg btn--cover" onclick="openM()">About Me</button>
      </div>
    </div>

    <div class="homecover__mouse-scroll-cont">
      <div class="arrow"><a href="#projects">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
  </section>








  <!-- project  -->
  <section id="projects" class="projects sec-pad">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-bg">
        <div class="heading-sec__main--proj"><span>MY Projects</span></div>
        <span class="heading-sec__sub">
          Some of my previous work
        </span>
      </h2>

      <div class="projects__content">
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="https://d33wubrfki0l68.cloudfront.net/61fc288f39a306e3130c72643480ce015dec48ae/e3272/assets/jpeg/boreal-coffee-clone.jpeg" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Student Performance Evaluation System</h3>
            <p class="projects__row-content-desc">
              SPES is a student performance evaluation system that desgined for teacher to analysis their student performance.
              SPES is my final year project for bachelor degree.
            </p>
            <a class='btn btn--med btn--theme dynamicBgClr' href='/project-3' target='_blank'>Case Study</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="https://d33wubrfki0l68.cloudfront.net/74f6186aaa2b6d5f6ea6da1013abfeb672f5c807/aee81/assets/jpeg/crown-template.jpeg" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Online Booking System or PC Record System</h3>
            <p class="projects__row-content-desc">
              PCRS is a computer record management system that i create during my internship.
            </p>
            <a class='btn btn--med btn--theme dynamicBgClr' href='/project-4' target='_blank'>View Project</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

<!-- js -->
<script src="./index.js"></script>

</html>


<!-- footer -->
<?php
include 'element/footer.php';
?>