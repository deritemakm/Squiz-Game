<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 50px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: darkcyan;
  color: white;
}

.container {
  padding: 10 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {    display: inline-block;
    background-color: crimson;
    color: white;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 16px;
    margin-bottom: 20px;
    border-radius: 6px;
    border: 3px solid crimson;
    transition: all 0.3s ease;
}


.button:hover {
  background-color: black;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.logout{
  display: flex;
  float: right;
  text-decoration: none;
  color: white;
  transition: all 0.3s ease;
  padding: 8px;
  border-radius: 6px;
  top: 15px;
  margin: 15px;
}

.logout:hover{
  color: black;
  background-color: white;
}
h1{
  text-align: center;
}
footer{
    background: #111;
    padding: 20px 23px;
    color: white;
    text-align: center;
}
.wrapper {
  width: 1170px;
  margin: auto;
}
header {
  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(image/start1.png);

  height: 100vh;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  position: relative;
}
.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
}
.nav-area li {
  display: inline-block;
  left: ;
}
.nav-area li a {
  color: #fff;
  text-decoration: none;
  padding: 5px 10px;
  font-family: poppins;
  font-size: 16px;
  text-transform: uppercase;
}
.nav-area li a:hover {
  background: #fff;
  color: #333;
}
.logo {
  float: left;
  left: 5%;
  
}
.logo img {
  position: absolute;
  width: 20%;
  height: 30%;
  left: 0px;
}

.about-section h1 {
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  font-size: 60px;
}
.about-section h1 span {
  color: #FF0000;
}
</style>
</head>
<body>
  <div class="wrapper" id="home">
                <div class="logo">


                    <img src="image/logo2.png" alt="jay" height="10" width="15"> 


                </div>
                       <ul class="nav-area">
                       <li><a href="home.php">dashboard</a></li>
                      <li><a href="aboutus.php">about us</a></li>
                       <li><a href="logout.php">logout</a></li>
    
                     </ul>
                    </div>
  <div class="about-section">
  <h1>SQUIZ<span> GAME<span></h1>
  <p> LEARN AND EXPLORE</p>
</div>
<hr>
<h2 style="text-align:center"> REVIEW QUIZ  </h2>
<hr>
<div class="row">
  <div class="column">
    <div class="card">
     <img src="image/candy1.png" alt="2014" style="width:30%" height=":48%" >
      <div class="container">
        <center><h2>Mathematics</h2><center>
       <center> <p class="title"> Review Quiz For Mathematics <br> Time: 20 minutes <br> Questions: 25</p></center>
    <center>    <a href="math.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="image/candy2.png" alt="2014" style="width:30%" height=":50%" >
      <div class="container">
        <center><h2> Filipino </h2><center>
       <center> <p class="title"> Review Quiz For Filipino   <br>Time: 20 minutes <br> Questions:25 </p></center>
    <center>    <a href="fil.php"> <button class="button" > start</p></button></center></a>
       
     </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
     <img src="image/candy4.png" alt="HOLLYWOOD" style="width:30%" height=":50%" >
      <div class="container">
        <center><h2>Science</h2><center>
       <center> <p class="title"> Review Quiz For Science  <br>Time: 20 minutes <br> Questions:25 </p></center>
    <center>    <a href="science.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>
      <div class="row">
  <div class="column">
    <div class="card" style="left: 0px;">
     <img src="image/candy6.png" alt="BOLLYWOOD" style="width:30%" height=":50%" >
      <div class="container">
        <center><h2>English</h2><center>
       <center> <p class="title"> Review Quiz For English  <br>Time: 20 minutes <br> Questions:25 </p></center>
    <center>    <a href="eng.php"> <button class="button" > start</p></button></center></a>
       
      </div>
    </div>
  </div>
    </div>
  </div>


  

 

<hr>
  <footer>
      <p>Created By Group 7 |  2022 All rights reserved</p>
  </footer>
</body>
</html>
</body>
</html>