<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Comfortaa', cursive;
}

/* Style the header */
header {
  background-color: #666;
  background-image: url(img/pic6-dark-blur.jpg);
  background-size: cover;
  text-align: center;
  padding: 2.5em 0 4.2em 1.8em;
  font-family: 'Fredoka One', cursive;
  text-align: justify;
  color: #ffff;
}

header h2{
  text-align: justify;
  font-size: 45px;
  padding: 2.5em 0 4.2em 1.8em;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
  margin:-3em 0 18em 0;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background-color: #404c5c;
  padding: 20px;
  margin:1em;
  border-radius:15px;
  list-style-type: none;


}

nav > ul li a{
  text-decoration: none;
  list-style-type: none;

}

/* Style the list inside the menu */
nav ul {
  width:100%;
  text-decoration: none;
  list-style-type: none;


}

nav ul li {
  font-family: 'Comfortaa', cursive;
  font-size:20px;
  padding-bottom: 20px;
}


nav ul li a:visited {
  color: #fff;
}

nav ul li a:hover{
  color: #EBDDD3;
  cursor: pointer;
  transform: scale(1.5);
  font-size:18px;


}


/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  width:100%;
  background-color:#EBDDD3;
  padding: 45px 45px 100px 45px;
  border-radius:15px;
  margin: 1em 1em 1em 0.3em;
  background-image: url(img/edu-pat-4.png);
  background-repeat: no-repeat;
  background-size: contain;
  font-family: 'M PLUS 1p', sans-serif;
}

article h2{
  color: #792F57;
  font-weight: bolder;
}

article p{
  padding:0em 0em 0.6em 0.8em;
  font-weight: 900;
}

article img{
  padding:0.3em 1em 1em 1.2em;
  border-radius:15px;
}
button{
  font-weight:900;
  color: #792F57;
}

.accordion-button{
  background-color: #792F57;
  color:#EBDDD3;
}
.accordion-button:focus{
   background-color: #792F57;
   color:#ffff;
}
.accordion-button:active {
  background-color: #792F57;
  color:#EBDDD3;

}



/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}



/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 890px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
  h1{
    font-size:30px;
  }
}
</style>
</head>
<body>
<header>
  <h1>Admissions</h1>
</header>

<section>
  <?php include 'side-menu.php';?>
  <article>
      <h2>Application Form</h2>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Admissions - 1
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
                    <iframe frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.eu/twyfordcofeacademiestrust/form/TestBK/formperma/7AlRTb_uVhcPVYADa-v52geArxcshvz907X293lI0jM'></iframe>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Admissions - 2
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Admissions - 3
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Admissions - 4
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Admissions - 5
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>

            </div>

  </article>
</section>
</body>
</html>
<?php include 'footer.php';?>
