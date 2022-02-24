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
.flex-card-container{
  max-width:100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}


.card {
  transition: 0.3s;
  width: 40%;
  border-radius: 15px;
  margin:1em;
}

.card img{
  padding-left:0em;
  padding-right:0em;
  padding-top:0em;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.card:hover {
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.profile-container {
  background-image: url(img/logo-light.png);
  background-repeat: no-repeat;
  background-size: contain;
  padding: 2px 16px;
}
.profile-container p{
  color: #792F57;
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
  <h1>Staff</h1>
</header>

<section>
  <?php include 'side-menu.php';?>
  <article>
<h2>Academic and Adminstrative Staff</h2>
<br>
<div class="flex-card-container">
<div class="card">
  <img src="img/headteacher.jpeg" alt="Avatar" style="width:100%">
  <div class="profile-container">
    <h4><b>Mrs Henderssen</b></h4>
    <p>Headteacher</p>
  </div>
</div>
<div class="card">
  <img src="img/teacher.webp" alt="Avatar" style="width:100%">
  <div class="profile-container">
    <h4><b>Ms Lee</b></h4>
    <p>Maths Teacher</p>
  </div>
</div>
<div class="card">
  <img src="img/teacher2.jpeg" alt="Avatar" style="width:100%">
  <div class="profile-container">
    <h4><b>Mr Richardson</b></h4>
    <p>English Teacher</p>
  </div>
</div>
<div class="card">
  <img src="img/teacher3.jpeg" alt="Avatar" style="width:100%">
  <div class="profile-container">
    <h4><b>Ms Lindsey Bingham</b></h4>
    <p>Account Manager</p>
  </div>
</div>
</div>

  <br>
  </article>
</section>
</body>
</html>
<?php include 'footer.php';?>
