
<style>
* {
  box-sizing: border-box;
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
  <nav>
    <ul>
      <li><a href="welcome-page.php">Welcome Message</a></li>
      <li><a href="tour-page.php">Virtual Tour</a></li>
      <li><a href="visions-values.php">Visions and Values</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="admissions.php">Admissions</a></li>
      <li><a href="staff.php">Staff</a></li>
      <li><a href="directions.php">Map and Directions</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="documents.php">Important Documents</a></li>
    </ul>
  </nav>
</body>
</html>
