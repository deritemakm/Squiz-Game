<!DOCTYPE html>
<html>
<head>
<title> Review Quiz For Mathematics</title>
<style>
body {
/* background-color: rgb(24, 197, 91); */
background:  darkcyan;
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
background: url(image/math.png);
background-size: cover;
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
  background: darkcyan;
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

<h2>1. Simplify:</h2>
<label for="a"><input type="radio" name="variable" value="0" id="var_string" />
12+3x
</label>
<label for="b"><input type="radio" name="variable" value="0" id="var_join" />12-17x</label>
<label for="c"><input type="radio" name="variable" value="1" id="var_info" />12-15x</label>
<label for="d"><input type="radio" name="variable" value="0" id="var_condition"/>12+15x</label>

<h2>2. A card is drawn from a pack of 52 cards. What is the probability that the card is a Queen?
</h2>
<label for="sub_string"><input type="radio" name="sub" value="0" id="sub_string"/>1/52</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>¼</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />1/16</label>
<label for="sub_condition"><input type="radio" name="sub" value="1" id="sub_condition" />None</label>

<h2>3. Distribute: −5(x+15)</h2>
<label for="cat_string"><input type="radio" name="con" value="1" id="cat_string" />−5x−75</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" />−5x+75</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" />5x+75
</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />5x-75</label>

<h2>4. Which of the following is equivalent to −3(2d−4)?</h2>
<label for="if_1"><input type="radio" name="if1" value="0" id="if_1" />−6d−12</label>
<label for="if_2"><input type="radio" name="if1" value="0" id="if_2" />6d+12 </label>
<label for="if_3"><input type="radio" name="if1" value="1" id="if_3" />−6d+12</label>
<label for="if_4"><input type="radio" name="if1"  value="0" id="if_4" />6d−12 </label>

<h2>5. If five cats can catch five mice in five minutes, how long will it take  one cat to catch one mouse?</h2>
<label for="if_5"><input type="radio" name="if2" value="1" id="if_5" />five minutes</label>
<label for="if_6"><input type="radio" name="if2" value="0" id="if_6" />1 minute  </label>
<label for="if_7"><input type="radio" name="if2" value="0" id="if_7" />15 minutes </label>
<label for="if_8"><input type="radio" name="if2"  value="0" id="if_8" />25 minutes </label>

<h2>6. An aircraft flew from A to B at an average speed of 230 m.p.h. It returned from B to A at an average speed of 300 m.p.h. what was its average speed for the two journeys?
</h2>
<label for="if_string"><input type="radio" name="if3" value="0" id="if_string"/>250 m.p.h.</label>
<label for="if_join"><input type="radio" name="if3" value="1" id="if_join" />260 m.p.h.
</label>
<label for="if_info"><input type="radio" name="if3" value="0" id="if_info" />270 m.p.h </label>
<label for="if_condition"><input type="radio" name="if3"  value="0" id="if_condition" />280 m.p.h </label>

<h2>7. A coin is tossed four times, if H = head and T = tail, what is the probability of the tosses coming up in the order HTHH?
</h2>
<label for="if_string"><input type="radio" name="if4" value="0" id="if_string" />3/16</label>
<label for="if_join"><input type="radio" name="if4" value="1" id="if_join" />1/16  </label>
<label for="if_info"><input type="radio" name="if4" value="0" id="if_info" />7/16</label>
<label for="if_condition"><input type="radio" name="if4"  value="0" id="if_condition" />3/16</label>

<h2>8. If y(x-1)=z then x=</h2>
<label for="if_string"><input type="radio" name="if5" value="0" id="if_string"/>y-z</label>
<label for="if_join"><input type="radio" name="if5" value="1" id="if_join"/>z/y + 1 </label>
<label for="if_info"><input type="radio" name="if5" value="0" id="if_info"/>y(z-1)
 </label>
<label for="if_condition"><input type="radio" name="if5"  value="0" id="if_condition"/>z(y-1) </label>

<h2>9. If 5 ounces is equal to 140 grams, then 2 pounds of ground meat is equal to how many grams?</h2>
<label for="if_string"><input type="radio" name="if6" value="0" id="if_string" />863</label>
<label for="if_join"><input type="radio" name="if6" value="0" id="if_join" />878 </label>
<label for="if_info"><input type="radio" name="if6" value="1" id="if_info" />896 </label>
<label for="if_condition"><input type="radio" name="if6"  value="0" id="if_condition" />915</label>

<h2>10.Two dice are thrown, what is the probability that both the dices are not having the same number.</h2>
<label for="if_string"><input type="radio" name="if7" value="0" id="if_string"/>1/4 </label>
<label for="if_join"><input type="radio" name="if7" value="0" id="if_join"/>1/9 </label>
<label for="if_info"><input type="radio" name="if7" value="1" id="if_info"/>5/6 </label>
<label for="if_condition"><input type="radio" name="if7"  value="0" id="if_condition"/>1/2</label>

<h2>11. A cyclist bikes x distance at 10 miles per hour and returns over the same path at 8 miles per hour. What is the cyclist’s average rate for the round trip in miles per hour?
</h2>
<label for="if_string"><input type="radio" name="if8" value="0" id="if_string" />8.1</label>
<label for="if_join"><input type="radio" name="if8" value="0" id="if_join" />8.3</label>
<label for="if_info"><input type="radio" name="if8" value="0" id="if_info" />8.6 </label>
<label for="if_condition"><input type="radio" name="if8"  value="1" id="if_condition" />8.9</label>

<h2>12. The number of milliliters in 1 liter is
</h2>
<label for="if_string"><input type="radio" name="if9" value="0" id="if_string" />10,000</label>
<label for="if_join"><input type="radio" name="if9" value="1" id="if_join" />1,000</label>
<label for="if_info"><input type="radio" name="if9" value="0" id="if_info" />0.1</label>
<label for="if_condition"><input type="radio" name="if9"  value="0" id="if_condition" />0.001</label>

<h2>13. In his pocket, a boy has 3 red marbles, 4 blue marbles, and 4 green marbles. How many will he have to take out of his pocket to ensure that he has taken out at least one of each color?
</h2>
<label for="if_string"><input type="radio" name="if10" value="0" id="if_string" />3
 </label>
<label for="if_join"><input type="radio" name="if10" value="0" id="if_join" />7
 </label>
<label for="if_info"><input type="radio" name="if10" value="0" id="if_info" />8 </label>
<label for="if_condition"><input type="radio" name="if10"  value="1" id="if_condition" />9 </label>

<h2>14. Which fraction is equal to 0.20%?</h2>
<label for="if_string"><input type="radio" name="if11" value="0" id="if_string" />1/20
 </label>
<label for="if_join"><input type="radio" name="if11" value="0" id="if_join" />1/50
 </label>
<label for="if_info"><input type="radio" name="if11" value="0" id="if_info" /> 1/400 </label>
<label for="if_condition"><input type="radio" name="if11"  value="1" id="if_condition" />1/500</label>

<h2>15. Find the missing term in the following sequence: 4, 9, 19, __, 79</h2>
<label for="if_string"><input type="radio" name="if12" value="0" id="if_string" />36 </label>
<label for="if_join"><input type="radio" name="if12" value="0" id="if_join" />37</label>
<label for="if_info"><input type="radio" name="if12" value="0" id="if_info" />38 </label>
<label for="if_condition"><input type="radio" name="if12"  value="1" id="if_condition" />39 </label>

<h2>16. If the perimeter of a rectangular house is 25 1/3 yards, and the length is 22 feet. What is the width?</h2>
<label for="if_string"><input type="radio" name="if13" value="1" id="if_string" />16 feet  </label>
<label for="if_join"><input type="radio" name="if13" value="0" id="if_join" />35 feet
</label>
<label for="if_info"><input type="radio" name="if13" value="0" id="if_info" />37 feet
</label>
<label for="if_condition"><input type="radio" name="if13"  value="0" id="if_condition" />42 feet
 </label>

<h2>17. 6.334 * 104 =</h2>
<label for="if_string"><input type="radio" name="if14" value="0" id="if_string" />0.0006334
</label>
<label for="if_join"><input type="radio" name="if14" value="0" id="if_join" />0.06334</label>
<label for="if_info"><input type="radio" name="if14" value="0" id="if_info" />6334</label>
<label for="if_condition"><input type="radio" name="if14"  value="1" id="if_condition" />63340</label>

<h2>18. Two angle in a triangle equal 120°. What is the measure of the third angle?</h2>
<label for="if_string"><input type="radio" name="if15" value="1" id="if_string" />60°</label>
<label for="if_join"><input type="radio" name="if15" value="0" id="if_join" />70°
 </label>
<label for="if_info"><input type="radio" name="if15" value="0" id="if_info" />80°</label>
<label for="if_condition"><input type="radio" name="if15"  value="0" id="if_condition" />90°</label>

<h2>19. The ratio in a right triangle of adjacent to hypotenuse is _____
</h2>
<label for="if_string"><input type="radio" name="if16" value="1" id="if_string" />Cosine</label>
<label for="if_join"><input type="radio" name="if16" value="0" id="if_join" />Tangent</label>
<label for="if_info"><input type="radio" name="if16" value="0" id="if_info" />Inverse cosine</label>
<label for="if_condition"><input type="radio" name="if16"  value="0" id="if_condition" />sine</label>

<h2>20. You are lying 120 ft away from a tree that is 50 feet tall. You look up at the top of the tree. Approximately how far is your hear from the top of the tree in a straight line?</h2>
<label for="if_string"><input type="radio" name="if17" value="0" id="if_string" />50 ft </label>
<label for="if_join"><input type="radio" name="if17" value="0" id="if_join" />75 ft</label>
<label for="if_info"><input type="radio" name="if17" value="0" id="if_info" />120 ft</label>
<label for="if_condition"><input type="radio" name="if17"  value="1" id="if_condition" />130 ft</label>

<h2>21. What is the algebraic expression for "the sum of x and 9"?</h2>
<label for="if_string"><input type="radio" name="if18" value="0" id="if_string" />9x </label>
<label for="if_join"><input type="radio" name="if18" value="0" id="if_join" /> X-9</label>
<label for="if_info"><input type="radio" name="if18" value="1" id="if_info" /> X+9 </label>
<label for="if_condition"><input type="radio" name="if18"  value="0" id="if_condition" />x/9
</label>

<h2>22. What is the cube root of 216?</h2>
<label for="if_string"><input type="radio" name="if19" value="0" id="if_string" />8 </label>
<label for="if_join"><input type="radio" name="if19" value="1" id="if_join" />6 </label>
<label for="if_info"><input type="radio" name="if19" value="0" id="if_info" />4</label>
<label for="if_condition"><input type="radio" name="if19"  value="0" id="if_condition" />5</label>

<h2>23. What is 4995 divided by 15?</h2>
<label for="if_string"><input type="radio" name="if20" value="0" id="if_string" />350</label>
<label for="if_join"><input type="radio" name="if20" value="0" id="if_join" />320</label>
</label>
<label for="if_info"><input type="radio" name="if20" value="1" id="if_info" />333</label>
<label for="if_condition"><input type="radio" name="if20"  value="0" id="if_condition" />360</label>

<h2>24. What is a scalene triangle?
</h2>
<label for="if_string"><input type="radio" name="if21" value="0" id="if_string" />It’s a triangle that has 4 equal sides or angles</label>
<label for="if_join"><input type="radio" name="if21" value="1" id="if_join" />It’s a triangle that has no equal sides or angles
</label>
<label for="if_info"><input type="radio" name="if21" value="0" id="if_info" />It’s a triangle that has 3 equal sides or angles
 </label>
<label for="if_condition"><input type="radio" name="if21"  value="0" id="if_condition" />It’s a triangle that has 2 equal sides or angles</label>

<h2>25. What is the greatest common factor of 42, 126, and 210 ?</h2>
<label for="if_string"><input type="radio" name="if22" value="0" id="if_string" />2</label>
<label for="if_join"><input type="radio" name="if22" value="0" id="if_join" />21
</label>
<label for="if_info"><input type="radio" name="if22" value="1" id="if_info" />42</label>
<label for="if_condition"><input type="radio" name="if22"  value="0" id="if_condition" />14</label>

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



