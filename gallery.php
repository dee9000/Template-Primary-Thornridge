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

/*GALLERY CSS*/


div.gallery {
  margin: 15px;
  border: 2px solid #792F57;
  border-radius:10px;
  float: left;
  width: 180px;
  transition:.5s;
  background-color: #FFFFFF;
}


div.gallery:hover {
  transform: scale(1.1);
}

div.gallery img {
  width: 100%;
  height: auto;
  border-top-left-radius:10px;
  border-top-right-radius:10px;

}

div.desc {
  padding: 15px;
  text-align: center;
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
  <h1>Gallery</h1>
</header>

<section>
  <?php include 'side-menu.php';?>
  <article>
    <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="img/b2s1.jpeg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="img/b2sb2.jpeg"  class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="https://source.unsplash.com/collection/190723/1500x900" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="img/b2sb3.jpeg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="https://source.unsplash.com/collection/190725/1500x900" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="https://source.unsplash.com/collection/190726/1500x900" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="https://source.unsplash.com/collection/190727/1500x900" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="https://source.unsplash.com/collection/190728/1500x900" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="img/pic6.jpg"  class="img-fluid" alt="image">
                    </div>

                </div>
            </div>
  </article>
</section>
</body>
</html>
<?php include 'footer.php';?>
