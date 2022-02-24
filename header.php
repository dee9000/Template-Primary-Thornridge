<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <title>Thornridge School</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="thornridge-final.css">
   <link rel="icon" href="img/logo-light.png" type="image/png">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <!--Fonts-->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=M+PLUS+1p&family=Public+Sans&display=swap" rel="stylesheet">
   <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

  </head>
  <body>
  <div class="inner-container">
    <!--NAVIGATION-->
    <div id="menuDemo">
    <!--start McMenu-->
    <div class="menu-icon-wrapper">
      <div class="menu-icon" data-menu="mcmenu">
        <div class="three-line">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <div id="mcmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <span>Our School <i class="arrow"></i></span>
                <ul class="dropdown">
                    <li><a href="welcome-page.php">Welcome Message</a></li>
                    <li><a href="tour-page.php">Virtual Tour</a></li>
                    <li><a href="visions-values.php">Visions and Values</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="admissions.php">Admissions</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="directions.php">Map and Directions</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="documents.php">Important Documents</a></li>

                    <li>
                        <span>Suspendisse vel <i class="arrow"></i></span>
                        <ul class="dropdown">
                            <li><a href="#">Etiam vestibulum</a></li>
                            <li><a href="#">Integer efficitur</a></li>
                            <li><a href="#">Finibus nibh</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>
                            Eget
                            <img src="img/pic1.jpg" style="margin:10px;width:80px;vertical-align:middle;border-radius:10px; " />
                            <i class="arrow"></i>
                        </span>
                        <ul class="dropdown">
                            <li><a href="#">Nam elementum</a></li>
                            <li><a href="#">Magna pharetra</a></li>
                            <li><a href="#">Pulvinar mi eget</a></li>
                            <li><a href="#">Tincidunt orci</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Parents</a></li>
            <li class="full-width">
                <span>Statutory Docs <i class="arrow"></i></span>
                <div class="dropdown">
                    <div class="clm">
                        <h3>Integer</h3>
                        <a href="#">Lacus iaculis</a>
                        <a href="#">Eu tortor</a>
                        <a href="#">Luctus varius</a>
                    </div>
                    <div class="clm">
                        <h3>Efficitur Viverra</h3>
                        <a href="#">Praesent</a>
                        <h3>At Eros</h3>
                        <a href="#">Pellentesque </a>
                        <a href="#">Dignissim pulvinar</a>
                    </div>
                    <div class="clm">
                        <a href="#"><img src="img/pic2.jpg" style="width:280px;border-radius:13px;" /></a>
                    </div>
                </div>
            </li>
            <li><a href="#">Curriculum</a></li>
            <li>
                <span>Contact <i class="arrow"></i></span>
                <ul class="dropdown right0">
                    <li><a href="#">Nam elementum</a></li>
                    <li><a href="#">Magna pharetra</a></li>
                    <li><a href="#">Pulvinar mi eget</a></li>
                    <li><a href="#">Tincidunt orci</a></li>
                    <li>
                        <span>
                            Eget
                            <img src="img/pic3.jpg" style="margin:10px;width:80px;vertical-align:middle;border-radius:10px;" />
                            <i class="arrow"></i>
                        </span>
                        <ul class="dropdown right0">
                            <li><a href="#">Nam elementum</a></li>
                            <li><a href="#">Magna pharetra</a></li>
                            <li><a href="#">Pulvinar mi eget</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
  </div>

<!-- svg for bottom of navigation-->
   <div class="svg-feature">
     <div class="custom-shape-divider-top-1642417774">
       <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
           <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
       </svg>
   </div>
  </div>
  <!-- svg for navigation-->
