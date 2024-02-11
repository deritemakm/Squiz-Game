<!DOCTYPE html>
<html>
<head>
<title> Review Quiz For Mathematics</title>
<style>
body {
/* background-color: rgb(24, 197, 91); */
background:   #CD5C5C;
font-family: Helvetica;
}

#main {
padding-top: 0px;
left: 0%;
width: 75%;
margin: auto;
padding: 20px;
background-color:#fff;
border-radius: 10px;
}

#header {
margin-top: 2%;
padding: 5px;
height: 300px;
background: url(image/science.png);
background-size: cover;
color: blue;
left: 10%;
}

label {
display: block;
}

input {
width: 30px;
margin-left: 40px;
}

h2 {
clear: both;
padding-top: 20px;
margin-left: 50px;
}

button {
width: 100px;
margin-top: 20px;
}

p {
  text-align: center;
  font-size: 60px;
  margin-top: 10px;
}
.nav-area {
  position:absolute;
  left: 50%;
  list-style: none;
  margin-top: 10px;

}
.nav-area li {
  display: inline-block;
}
.nav-area li a {
  color: #000;
  text-decoration: none;
  padding: 5px 20px;
  font-family: poppins;
  font-size: 16px;
  text-transform: uppercase;
}
.nav-area li a:hover {
  background:  #CD5C5C;
  color: #333;
}
.logo {
  float: left;
  left: 0%;
  
}
.logo img {
  position: absolute;
  width: 15%;
  height: 20%;
  left: -40px;

  
}
</style>
<div class="logo">


                    <img src="image/logo2.png" alt="jay" height="10" width="15"> 


                </div>
                       <ul class="nav-area">
                       <li><a href="home.php">dashboard</a></li>
                        <li><a href="quiz_homepage.php">Review Quiz</a></li>
                       <li><a href="logout.php">logout</a></li>
    
                     </ul>
                    </div>
 <!----------------logout after 100 second --------->
<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
                      location.href = 'quiz_home_page.php'; 
               }, (60 * 10000));
</script>


</head>

<body >
<div id="main">
<div id="header">
<h1><center><u style="padding: 95px;"></u></center></h1>
</div>
<p id="demo"></p>
<form id="form1">

<h2>1. Blanket of air surrounding the earth</h2>
<label for="a"><input type="radio" name="variable" value="1" id="var_string" />Atmosphere
</label>
<label for="b"><input type="radio" name="variable" value="0" id="var_join" />Oxygen</label>
<label for="c"><input type="radio" name="variable" value="0" id="var_info" />Nitrogen</label>
<label for="d"><input type="radio" name="variable" value="0" id="var_condition"/>Carbon</label>

<h2>2.  Gas exhaled by man and animals and given off by factories and vehicles.
</h2>
<label for="sub_string"><input type="radio" name="sub" value="1" id="sub_string"/>Carbon dioxide</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>Nitrogen</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />Oxygen</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />Methane</label>

<h2>3.  Warming of earth’s surface due to trapped heat energy by excess carbon dioxide and methane</h2>
<label for="cat_string"><input type="radio" name="con" value="1" id="cat_string" />Greenhouse effect</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" />Air pressure</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" />Methane
</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />Oxygen</label>

<h2>4.  Gas given off by decaying living things</h2>
<label for="if_1"><input type="radio" name="if1" value="0" id="if_1" />Oxygen</label>
<label for="if_2"><input type="radio" name="if1" value="1" id="if_2" />Methane </label>
<label for="if_3"><input type="radio" name="if1" value="0" id="if_3" />Nitrogen</label>
<label for="if_4"><input type="radio" name="if1"  value="0" id="if_4" />Carbon Dioxide</label>

<h2>5.  Layer nearest the earth surface.</h2>
<label for="if_5"><input type="radio" name="if2" value="0" id="if_5" />Stratosphere</label>
<label for="if_6"><input type="radio" name="if2" value="0" id="if_6" />Ozone layer</label>
<label for="if_7"><input type="radio" name="if2" value="0" id="if_7" />Troposphere</label>
<label for="if_8"><input type="radio" name="if2"  value="1" id="if_8" />Atmosphere<label>

<h2>6. Higher up; airplanes coast along here
</h2>
<label for="if_string"><input type="radio" name="if3" value="0" id="if_string"/>Troposphere</label>
<label for="if_join"><input type="radio" name="if3" value="1" id="if_join" />Stratosphere
</label>
<label for="if_info"><input type="radio" name="if3" value="0" id="if_info" />Ozone layer</label>
<label for="if_condition"><input type="radio" name="if3"  value="0" id="if_condition" />Atmosphere</label>

<h2>7.  Designed to screen the earth from the harmful ultraviolet rays of the sun.
</h2>
<label for="if_string"><input type="radio" name="if4" value="0" id="if_string"/>Troposphere</label>
<label for="if_join"><input type="radio" name="if4" value="1" id="if_join"/>Ozone layer</label>
<label for="if_info"><input type="radio" name="if4" value="0" id="if_info"/>Stratosphere</label>
<label for="if_condition"><input type="radio" name="if4"  value="0" id="if_condition" />Atmosphere</label>

<h2>8.  Refers to the environment where living and non-living things exists and interact with one another.</h2>
<label for="if_string"><input type="radio" name="if5" value="0" id="if_string"/>Decomposition</label>
<label for="if_join"><input type="radio" name="if5" value="1" id="if_join"/>Ecosystem</label>
<label for="if_info"><input type="radio" name="if5" value="0" id="if_info"/>Consumers
 </label>
<label for="if_condition"><input type="radio" name="if5"  value="0" id="if_condition"/>Farm</label>

<h2>9.  Primary source of food in the ecosystem.</h2>
<label for="if_string"><input type="radio" name="if6" value="1" id="if_string" />Producers</label>
<label for="if_join"><input type="radio" name="if6" value="0" id="if_join" />Consumers</label>
<label for="if_info"><input type="radio" name="if6" value="0" id="if_info" />Decomposers</label>
<label for="if_condition"><input type="radio" name="if6"  value="0" id="if_condition" />Marker</label>

<h2>10. Association between two or more species in which all derive benefits in feeding or in some other way.</h2>
<label for="if_string"><input type="radio" name="if7" value="0" id="if_string"/>Commensalism</label>
<label for="if_join"><input type="radio" name="if7" value="1" id="if_join"/>Mutualism</label>
<label for="if_info"><input type="radio" name="if7" value="0" id="if_info"/>Parasitism</label>
<label for="if_condition"><input type="radio" name="if7"  value="0" id="if_condition"/>Substance</label>

<h2>11. Move around the sun in elliptical orbits
</h2>
<label for="if_string"><input type="radio" name="if8" value="0" id="if_string" />Planets</label>
<label for="if_join"><input type="radio" name="if8" value="0" id="if_join" />Sun</label>
<label for="if_info"><input type="radio" name="if8" value="0" id="if_info" />Axis</label>
<label for="if_condition"><input type="radio" name="if8"  value="1" id="if_condition" />Moon</label>

<h2>12. Is an imaginary line that runs through the North and the South pole.
</h2>
<label for="if_string"><input type="radio" name="if9" value="0" id="if_string" />Planets</label>
<label for="if_join"><input type="radio" name="if9" value="1" id="if_join" />Sun</label>
<label for="if_info"><input type="radio" name="if9" value="0" id="if_info" />Axis</label>
<label for="if_condition"><input type="radio" name="if9"  value="0" id="if_condition" />Earth</label>

<h2>13. Study of heavenly or celestial bodies.
</h2>
<label for="if_string"><input type="radio" name="if10" value="0" id="if_string" />Physical Sciences
 </label>
<label for="if_join"><input type="radio" name="if10" value="0" id="if_join" />Meteorology
 </label>
<label for="if_info"><input type="radio" name="if10" value="1" id="if_info" />Astronomy</label>
<label for="if_condition"><input type="radio" name="if10"  value="0" id="if_condition" />Scientist<label>

<h2>14. Comes from Latin word “scire” meaning to “know”.</h2>
<label for="if_string"><input type="radio" name="if11" value="0" id="if_string" />Technology
 </label>
<label for="if_join"><input type="radio" name="if11" value="1" id="if_join" />Science
 </label>
<label for="if_info"><input type="radio" name="if11" value="0" id="if_info" />Natural</label>
<label for="if_condition"><input type="radio" name="if11"  value="0" id="if_condition" />Physics</label>

<h2>15. Study of insects.</h2>
<label for="if_string"><input type="radio" name="if12" value="1" id="if_string" />Entomology</label>
<label for="if_join"><input type="radio" name="if12" value="0" id="if_join" />Embryology</label>
<label for="if_info"><input type="radio" name="if12" value="0" id="if_info" />Ecology</label>
<label for="if_condition"><input type="radio" name="if12"  value="0" id="if_condition" />Insectomy</label>

<h2>16. Study of the development of organism in the uterus.</h2>
<label for="if_string"><input type="radio" name="if13" value="0" id="if_string" />Entomology</label>
<label for="if_join"><input type="radio" name="if13" value="1" id="if_join" />Embryology
</label>
<label for="if_info"><input type="radio" name="if13" value="0" id="if_info" />Ecology
</label>
<label for="if_condition"><input type="radio" name="if13"  value="0" id="if_condition" />Economist
 </label>

<h2>17. Study of bacteria and viruses.</h2>
<label for="if_string"><input type="radio" name="if14" value="0" id="if_string" />Physiology
</label>
<label for="if_join"><input type="radio" name="if14" value="1" id="if_join" />Microbiology</label>
<label for="if_info"><input type="radio" name="if14" value="0" id="if_info" />Biology</label>
<label for="if_condition"><input type="radio" name="if14"  value="0" id="if_condition" />Micrology</label>

<h2>18. Deals with the study of living things.</h2>
<label for="if_string"><input type="radio" name="if15" value="0" id="if_string" />Biology</label>
<label for="if_join"><input type="radio" name="if15" value="1" id="if_join" />Biological Sciences
 </label>
<label for="if_info"><input type="radio" name="if15" value="0" id="if_info" />Cytology</label>
<label for="if_condition"><input type="radio" name="if15"  value="0" id="if_condition" />Microbiology</label>

<h2>19. A geneticist and a plant breeder.
</h2>
<label for="if_string"><input type="radio" name="if16" value="0" id="if_string" />Jose Jovellanos</label>
<label for="if_join"><input type="radio" name="if16" value="1" id="if_join" />Pedro Escuro, Ph. D.</label>
<label for="if_info"><input type="radio" name="if16" value="0" id="if_info" />Gregorio Zara</label>
<label for="if_condition"><input type="radio" name="if16"  value="0" id="if_condition" />Albert Einstein</label>

<h2>20.  Set up the first oil refinery in the Philippines.</h2>
<label for="if_string"><input type="radio" name="if17" value="1" id="if_string" />Jose Jovellanos </label>
<label for="if_join"><input type="radio" name="if17" value="0" id="if_join" />Albert Einstein</label>
<label for="if_info"><input type="radio" name="if17" value="0" id="if_info" />Pedro Escuro, Ph. D.</label>
<label for="if_condition"><input type="radio" name="if17"  value="0" id="if_condition" />Gregorio Zara</label>

<h2>21. Invented the TV-telephone or video phone</h2>
<label for="if_string"><input type="radio" name="if18" value="0" id="if_string" />Jose Jovellanos</label>
<label for="if_join"><input type="radio" name="if18" value="0" id="if_join" />Pedro Escuro, Ph. D.</label>
<label for="if_info"><input type="radio" name="if18" value="1" id="if_info" />Gregorio Zara</label>
<label for="if_condition"><input type="radio" name="if18"  value="0" id="if_condition" />Albert Einstein
</label>

<h2>22. Quantity of matter in an object.</h2>
<label for="if_string"><input type="radio" name="if19" value="1" id="if_string" />Mass</label>
<label for="if_join"><input type="radio" name="if19" value="0" id="if_join" />Force </label>
<label for="if_info"><input type="radio" name="if19" value="0" id="if_info" />Motion</label>
<label for="if_condition"><input type="radio" name="if19"  value="0" id="if_condition" />Velocity</label>

<h2>23. Change in position</h2>
<label for="if_string"><input type="radio" name="if20" value="0" id="if_string" />Mass</label>
<label for="if_join"><input type="radio" name="if20" value="0" id="if_join" />Force</label>
</label>
<label for="if_info"><input type="radio" name="if20" value="1" id="if_info" />Motion</label>
<label for="if_condition"><input type="radio" name="if20"  value="0" id="if_condition" />Time</label>

<h2>24. For every action, there is always an equal and opposite reaction.
</h2>
<label for="if_string"><input type="radio" name="if21" value="0" id="if_string" />First Law of Motion</label>
<label for="if_join"><input type="radio" name="if21" value="0" id="if_join" />Second Law of Motion
</label>
<label for="if_info"><input type="radio" name="if21" value="1" id="if_info" />Third Law of Motion
 </label>
<label for="if_condition"><input type="radio" name="if21"  value="0" id="if_condition" />Motion</label>

<h2>25. A moving object accelerates because a force is acting on it.</h2>
<label for="if_string"><input type="radio" name="if22" value="0" id="if_string" />First Law of Motion</label>
<label for="if_join"><input type="radio" name="if22" value="1" id="if_join" />Second Law of Motion
</label>
<label for="if_info"><input type="radio" name="if22" value="0" id="if_info" />Third Law of Motion</label>
<label for="if_condition"><input type="radio" name="if22"  value="0" id="if_condition" />Motion</label>

<button type="submit" value="Submit" > Submit</button>

</form>
    
<p>Your score is: <span id="grade">__</span></p>
<p id="grade2"></p>



<script>
document.getElementById("form1").onsubmit=function() {
       variable = parseInt(document.querySelector('input[name = "variable"]:checked').value);
     sub = parseInt(document.querySelector('input[name = "sub"]:checked').value);
     con = parseInt(document.querySelector('input[name = "con"]:checked').value);
     if1 = parseInt(document.querySelector('input[name = "if1"]:checked').value);
       if2 = parseInt(document.querySelector('input[name = "if2"]:checked').value);
       if3 = parseInt(document.querySelector('input[name = "if3"]:checked').value);
       if4 = parseInt(document.querySelector('input[name = "if4"]:checked').value);
 
       if5 = parseInt(document.querySelector('input[name = "if5"]:checked').value);
       if6 = parseInt(document.querySelector('input[name = "if6"]:checked').value);
       if7 = parseInt(document.querySelector('input[name = "if7"]:checked').value);
       if8 = parseInt(document.querySelector('input[name = "if8"]:checked').value);
   
       if9 = parseInt(document.querySelector('input[name = "if9"]:checked').value);
       if10 = parseInt(document.querySelector('input[name = "if10"]:checked').value);
       if11 = parseInt(document.querySelector('input[name = "if11"]:checked').value);
       if12 = parseInt(document.querySelector('input[name = "if12"]:checked').value);
     
       if13 = parseInt(document.querySelector('input[name = "if13"]:checked').value);
       if14 = parseInt(document.querySelector('input[name = "if14"]:checked').value);
       if15 = parseInt(document.querySelector('input[name = "if15"]:checked').value);
       if16 = parseInt(document.querySelector('input[name = "if16"]:checked').value);
       if17 = parseInt(document.querySelector('input[name = "if17"]:checked').value);
       if18 = parseInt(document.querySelector('input[name = "if18"]:checked').value);
       if19 = parseInt(document.querySelector('input[name = "if19"]:checked').value);
       if20 = parseInt(document.querySelector('input[name = "if20"]:checked').value);
     if21 = parseInt(document.querySelector('input[name = "if21"]:checked').value);
       if22 = parseInt(document.querySelector('input[name = "if22"]:checked').value);
     
     result = variable + sub + con + if1 + if2 + if3 + if4 +if5 +if6 +if7 +if8 +if9 +if10+ if11 +if12 +if13 +if14 +if15 +if16+ if17 +if18 +if19 +if20 + if21 + if22;
     
  document.getElementById("grade").innerHTML = result;

 grading = [
     {score:0,feedback:" You need to spend more time. Try again", image: "image/sad.png"},
     {score:1,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
           {score:2,feedback:" You need to spend more time. Try again", image: "image/sad.png"},
     {score:3,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
           {score:4,feedback:" You need to spend more time. Try again", image: "image/sad.png"},
     {score:5,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
           {score:6,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
           {score:7,feedback:" You need to spend more time. Try again", image: "image/sad.png"},
     {score:8,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
           {score:9,feedback:" You need to spend more time. Try again", image: "image/sad.png"},
     {score:10,feedback:"You need to spend more time. Try again", image: "image/sad.png"},
 
            {score:11,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:12,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:13,feedback:"so close. Try again", image: "image/goodluck.png"},
               {score:14,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:15,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:16,feedback:"so close. Try again", image: "image/goodluck.png"},
               {score:17,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:18,feedback:"so close. Try again", image: "image/goodluck.png"},
             {score:19,feedback:"so close. Try again", image: "image/goodluck.png"},
              {score:20,feedback:"so close. Try again", image: "image/goodluck.png"},

             {score:21,feedback:"excellent ", image: "image/perfect.png"},
              {score:22,feedback:"excellent ", image: "image/perfect.png"},
               {score:23,feedback:"excellent ", image: "image/perfect.png"},
                {score:24,feedback:"excellent ", image: "image/perfect.png"},
               {score:25,feedback:"excellent ", image: "image/perfect.png"},
          
            ];
    
for(i=0; i<grading.length; i++) {
    if(result == grading[i].score) {
    result2 = grading[i].feedback + "<br /><img src='" + grading[i].image + "' width='300'  />";
    }
    }


document.getElementById("grade2").innerHTML = result2; 

return false; // required to not refresh the page; just leave this here
} //this ends the submit function

</script>
<script>
    // Set the date we're counting down to
    var countDownDate = (new Date().getTime() + (60 * 20000));
    // Update the count down every 1 second
    var x = setInterval(function() {
    
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

</div>
</body>
</html>



