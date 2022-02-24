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
  color:darkslategray;
  font-size: 18px;

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
  <h1>Welcome to thornridge</h1>
</header>

<section>

  </nav>

  <article>

      <h2>Welcome to our School</h2>
      <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
      <img src="img/b2sb2.jpeg" style="border-radius:15px;" height="350">
      <br>
      <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
      <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
      <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
      <h2>New Opportunities</h2>
<iframe width="460" height="315" src="https://www.youtube.com/embed/2pqjRBZvj38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      <br>
      <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
      <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
      <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.73912804417!2d76.81306640115254!3d28.646677246352574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1536257189401" width="70%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
    <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
    <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
    <iframe frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.eu/twyfordcofeacademiestrust/form/TestBK/formperma/7AlRTb_uVhcPVYADa-v52geArxcshvz907X293lI0jM'></iframe>

  </article>
</section>
</body>
</html>
<?php include 'footer.php';?>