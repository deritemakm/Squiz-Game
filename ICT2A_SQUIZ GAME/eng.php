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
background: url(image/eng.png);
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

<h2>1. To "zero in on" is to _____ something.</h2>
<label for="a"><input type="radio" name="variable" value="1" id="var_string" />
aim for 
</label>
<label for="b"><input type="radio" name="variable" value="0" id="var_join" />adjust</label>
<label for="c"><input type="radio" name="variable" value="0" id="var_info" />alter</label>
<label for="d"><input type="radio" name="variable" value="0" id="var_condition"/>tell</label>

<h2>2. To "walk all over" someone is to _____ them.
</h2>
<label for="sub_string"><input type="radio" name="sub" value="1" id="sub_string"/>mislead </label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>aggravate</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />impose on</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />alter</label>

<h2>3. "Under the sun" means _____.</h2>
<label for="cat_string"><input type="radio" name="con" value="0" id="cat_string" />it's impossible</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" />it's unusual</label>
<label for="cat_info"><input type="radio" name="con" value="1" id="cat_info" /> on earth
</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />sunlight</label>

<h2>4. To "run away with" means to _____.</h2>
<label for="if_1"><input type="radio" name="if1" value="0" id="if_1" />lend</label>
<label for="if_2"><input type="radio" name="if1" value="1" id="if_2" />steal </label>
<label for="if_3"><input type="radio" name="if1" value="0" id="if_3" />borrow</label>
<label for="if_4"><input type="radio" name="if1"  value="0" id="if_4" />change </label>

<h2>5. "Razzle dazzle" is _____.</h2>
<label for="if_5"><input type="radio" name="if2" value="1" id="if_5" />a fancy display s</label>
<label for="if_6"><input type="radio" name="if2" value="0" id="if_6" />an unusual event</label>
<label for="if_7"><input type="radio" name="if2" value="0" id="if_7" />something impossible</label>
<label for="if_8"><input type="radio" name="if2"  value="0" id="if_8" />dancing</label>

<h2>6. If something will happen "rain or shine", it'll happen _____.
</h2>
<label for="if_string"><input type="radio" name="if3" value="0" id="if_string"/>at some point, but we don't know when.</label>
<label for="if_join"><input type="radio" name="if3" value="0" id="if_join" />outside.
</label>
<label for="if_info"><input type="radio" name="if3" value="1" id="if_info" />no matter what</label>
<label for="if_condition"><input type="radio" name="if3"  value="0" id="if_condition" />inside<label>

<h2>7. A"Uh-huh" means the same as _____.
</h2>
<label for="if_string"><input type="radio" name="if4" value="0" id="if_string" />no</label>
<label for="if_join"><input type="radio" name="if4" value="1" id="if_join" />yes</label>
<label for="if_info"><input type="radio" name="if4" value="0" id="if_info" />maybe</label>
<label for="if_condition"><input type="radio" name="if4"  value="0" id="if_condition" />what</label>

<h2>8. To "rattle off" is to _____.</h2>
<label for="if_string"><input type="radio" name="if5" value="0" id="if_string"/>break something </label>
<label for="if_join"><input type="radio" name="if5" value="1" id="if_join"/> say things quickly</label>
<label for="if_info"><input type="radio" name="if5" value="0" id="if_info"/>be old
 </label>
<label for="if_condition"><input type="radio" name="if5"  value="0" id="if_condition"/>shake</label>

<h2>9.  To go "through thick or thin" is to _____.</h2>
<label for="if_string"><input type="radio" name="if6" value="0" id="if_string" />lose a lot of weight</label>
<label for="if_join"><input type="radio" name="if6" value="0" id="if_join" />get married</label>
<label for="if_info"><input type="radio" name="if6" value="1" id="if_info" />have many kinds of experiences</label>
<label for="if_condition"><input type="radio" name="if6"  value="0" id="if_condition" />be in a relationship</label>

<h2>10. If you are "off the hook", you are _____.</h2>
<label for="if_string"><input type="radio" name="if7" value="0" id="if_string"/>going to do something bad</label>
<label for="if_join"><input type="radio" name="if7" value="1" id="if_join"/>out of trouble</label>
<label for="if_info"><input type="radio" name="if7" value="0" id="if_info"/>crazy</label>
<label for="if_condition"><input type="radio" name="if7"  value="0" id="if_condition"/>tired</label>

<h2>11. She always <u>gives me a hard time</u>.
</h2>
<label for="if_string"><input type="radio" name="if8" value="0" id="if_string" />yields to me</label>
<label for="if_join"><input type="radio" name="if8" value="0" id="if_join" />yick and yacks</label>
<label for="if_info"><input type="radio" name="if8" value="1" id="if_info" />yanks me around</label>
<label for="if_condition"><input type="radio" name="if8"  value="0" id="if_condition" />hate me</label>

<h2>12. I'm not going to a <u>horrible and dirty</u>place like that.
</h2>
<label for="if_string"><input type="radio" name="if9" value="1" id="if_string" />sleazebag</label>
<label for="if_join"><input type="radio" name="if9" value="0" id="if_join" />solid</label>
<label for="if_info"><input type="radio" name="if9" value="0" id="if_info" />sober</label>
<label for="if_condition"><input type="radio" name="if9"  value="0" id="if_condition" />drunk</label>

<h2>13.  Let's <u>stop work and relax</u> this weekend.
</h2>
<label for="if_string"><input type="radio" name="if10" value="0" id="if_string" />vent 
 </label>
<label for="if_join"><input type="radio" name="if10" value="1" id="if_join" />veg 
 </label>
<label for="if_info"><input type="radio" name="if10" value="0" id="if_info" />vary</label>
<label for="if_condition"><input type="radio" name="if10"  value="0" id="if_condition" />sleep </label>

<h2>14. The business is doing very well and they are really <u>making a lot of money.</u></h2>
<label for="if_string"><input type="radio" name="if11" value="0" id="if_string" />running it over
 </label>
<label for="if_join"><input type="radio" name="if11" value="1" id="if_join" />raking it in 
 </label>
<label for="if_info"><input type="radio" name="if11" value="0" id="if_info" />right here</label>
<label for="if_condition"><input type="radio" name="if11"  value="0" id="if_condition" />scared</label>

<h2>15. It isn't a good idea to <u>cause trouble</u> when you can't speak the language.</h2>
<label for="if_string"><input type="radio" name="if12" value="0" id="if_string" />mix up </label>
<label for="if_join"><input type="radio" name="if12" value="1" id="if_join" />make waves </label>
<label for="if_info"><input type="radio" name="if12" value="0" id="if_info" />mud up</label>
<label for="if_condition"><input type="radio" name="if12"  value="0" id="if_condition" />fire up</label>

<h2>16.  She's so <u>fashionable and glamorous.</u> I can't understand why she's with him.</h2>
<label for="if_string"><input type="radio" name="if13" value="0" id="if_string" />grass</label>
<label for="if_join"><input type="radio" name="if13" value="1" id="if_join" />glitzy
</label>
<label for="if_info"><input type="radio" name="if13" value="0" id="if_info" />gifted
</label>
<label for="if_condition"><input type="radio" name="if13"  value="0" id="if_condition" />amazing
 </label>

<h2>17. This morning was <u> really boring</u>. Let's do something interesting later.</h2>
<label for="if_string"><input type="radio" name="if14" value="0" id="if_string" />a ditch 
</label>
<label for="if_join"><input type="radio" name="if14" value="1" id="if_join" />a drag</label>
<label for="if_info"><input type="radio" name="if14" value="0" id="if_info" />a dope</label>
<label for="if_condition"><input type="radio" name="if14"  value="0" id="if_condition" />bad</label>

<h2>18. When Todd drives it really is <u>both a dangerous and frightening</u> experience.</h2>
<label for="if_string"><input type="radio" name="if15" value="1" id="if_string" />hairy</label>
<label for="if_join"><input type="radio" name="if15" value="0" id="if_join" />harmless
 </label>
<label for="if_info"><input type="radio" name="if15" value="0" id="if_info" />hanging</label>
<label for="if_condition"><input type="radio" name="if15"  value="0" id="if_condition" />hard</label>

<h2>19. I really <b>became interested</b> in computers at school.
</h2>
<label for="if_string"><input type="radio" name="if16" value="1" id="if_string" />got into</label>
<label for="if_join"><input type="radio" name="if16" value="0" id="if_join" /> gave out to </label>
<label for="if_info"><input type="radio" name="if16" value="0" id="if_info" />got off on</label>
<label for="if_condition"><input type="radio" name="if16"  value="0" id="if_condition" />give it on</label>

<h2>20.This is a <b>great</b> meal. I can't believe you made it.</h2>
<label for="if_string"><input type="radio" name="if17" value="0" id="if_string" />vulgar </label>
<label for="if_join"><input type="radio" name="if17" value="1" id="if_join" />vicious</label>
<label for="if_info"><input type="radio" name="if17" value="0" id="if_info" />volcanic</label>
<label for="if_condition"><input type="radio" name="if17"  value="0" id="if_condition" />versatile</label>

<h2> Appropriate questions </h2>
<h3> Find the appropriate questions for the following answers.</h3>

<h2>21. Richard and his girl were late for the performance. When they got to the theatre the play had already begun.</h2>
<label for="if_string"><input type="radio" name="if18" value="1" id="if_string" />When did they come to the theatre?</label>
<label for="if_join"><input type="radio" name="if18" value="0" id="if_join" />How did they get to the theatre?</label>
<label for="if_info"><input type="radio" name="if18" value="0" id="if_info" />Who was late?</label>
<label for="if_condition"><input type="radio" name="if18"  value="0" id="if_condition" />Who plays the leading part?
</label>

<h2>22.  He has a great knowledge of the English history.</h2>
<label for="if_string"><input type="radio" name="if19" value="0" id="if_string" />Do you know English history</label>
<label for="if_join"><input type="radio" name="if19" value="0" id="if_join" />Does he like English history?</label>
<label for="if_info"><input type="radio" name="if19" value="1" id="if_info" />What kind of knowledge does he have?</label>
<label for="if_condition"><input type="radio" name="if19"  value="0" id="if_condition" /> s he fond of English?</label>

<h2>23. Sometimes it's easy to make plans, but difficult to carry them out.</h2>
<label for="if_string"><input type="radio" name="if20" value="0" id="if_string" />Do you like to make plans?</label>
<label for="if_join"><input type="radio" name="if20" value="1" id="if_join" />What is easier about plans?</label>
</label>
<label for="if_info"><input type="radio" name="if20" value="0" id="if_info" />Who makes plans?</label>
<label for="if_condition"><input type="radio" name="if20"  value="0" id="if_condition" />Who carried out the plans?</label>

<h2>24. Marie Curie was the leading woman of her time and the first person who received the Nobel Prize.
</h2>
<label for="if_string"><input type="radio" name="if21" value="0" id="if_string" />Who received the Nobel Prize?</label>
<label for="if_join"><input type="radio" name="if21" value="0" id="if_join" />What did he receive?
</label>
<label for="if_info"><input type="radio" name="if21" value="1" id="if_info" />What kind of woman was M. Curie?
 </label>
<label for="if_condition"><input type="radio" name="if21"  value="0" id="if_condition" />Was he the leading scientist of his time?</label>

<h2>25. When they woke up in the morning they were surprised to see that the only window in the room was closed but the large mirror was broken.</h2>
<label for="if_string"><input type="radio" name="if22" value="1" id="if_string" />What surprised them when they woke up?</label>
<label for="if_join"><input type="radio" name="if22" value="0" id="if_join" />When did they close the window?
</label>
<label for="if_info"><input type="radio" name="if22" value="0" id="if_info" />Who broke the mirror to pieces?</label>
<label for="if_condition"><input type="radio" name="if22"  value="0" id="if_condition" />They were surprised, weren't they?</label>

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



