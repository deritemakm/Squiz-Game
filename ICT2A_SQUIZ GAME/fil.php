<!DOCTYPE html>
<html>
<head>
<title> Review Quiz For Mathematics</title>
<style>
body {
/* background-color: rgb(24, 197, 91); */
background:   #ffc0cb;
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
background: url(image/fil.png);
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
  background:  #ffc0cb;
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

<h2>1. Ito ay isang salita o bahagi ng salita na nagsasaad ng kilos o galaw, pangyayari, o katayuan ng isang tao, hayop, o bagay.</h2>
<label for="a"><input type="radio" name="variable" value="1" id="var_string"/>Pandiwa
</label>
<label for="b"><input type="radio" name="variable" value="0" id="var_join"/>Banghay </label>
<label for="c"><input type="radio" name="variable" value="1" id="var_info"/>Tula</label>
<label for="d"><input type="radio" name="variable" value="0" id="var_condition"/>Sanaysay</label>

<h2>2. Ang kilos o galaw ay nagawa na, tapos na o nakalipas na.
</h2>
<label for="sub_string"><input type="radio" name="sub" value="1" id="sub_string"/>Perpektibo</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>Imperpektibo</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />Kontemplatibo</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />Perpektibong katatapos</label>

<h2>3.Ito ay ginagamitan ng mga panlaping na, nag, um, at in.</h2>
<label for="cat_string"><input type="radio" name="con" value="0" id="cat_string" />Perpektibo</label>
<label for="cat_join"><input type="radio" name="con" value="1" id="cat_join" />Imperpektibo</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" />Kontemplatibo
</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />Perpektibong katatapos</label>

<h2>4. Ang kilos ay hindi pa nagagawa, nagaganap, o gagawin pa lamang.</h2>
<label for="if_1"><input type="radio" name="if1" value="0" id="if_1" />Perpektibo</label>
<label for="if_2"><input type="radio" name="if1" value="0" id="if_2" />Imperpektibo</label>
<label for="if_3"><input type="radio" name="if1" value="1" id="if_3" />Kontemplatibo</label>
<label for="if_4"><input type="radio" name="if1"  value="0" id="if_4" />Perpektibong katatapos</label>

<h2>5. Ang aspektong ito ng pandiwa ay nagsasaad ng kilos na sandali lamang pagkatapos ito ginawa.</h2>
<label for="if_5"><input type="radio" name="if2" value="0" id="if_5" />Perpektibo</label>
<label for="if_6"><input type="radio" name="if2" value="0" id="if_6" />Imperpektibo</label>
<label for="if_7"><input type="radio" name="if2" value="0" id="if_7" />Kontemplatibo</label>
<label for="if_8"><input type="radio" name="if2"  value="1" id="if_8" />Perpektibong katatapos</label>

<h2>6. Ito ay mga Halimbawa ng Pandiwa sa Pangungusap sa Aspektong Perpektibong Katatapos, maliban sa isa.
</h2>
<label for="if_string"><input type="radio" name="if3" value="0" id="if_string"/>Katatapos ko lamang kumain</label>
<label for="if_join"><input type="radio" name="if3" value="1" id="if_join" />Kagagaling ko lang sa paaralan.
</label>
<label for="if_info"><input type="radio" name="if3" value="0" id="if_info" />Kabibili ko lang ng baka sa palengke.</label>
<label for="if_condition"><input type="radio" name="if3"  value="0" id="if_condition" />Matutulog ako ng maaga mamayang gabi.</label>

<h2>7. Ito ay halimbawa ng kontemplatibo.
</h2>
<label for="if_string"><input type="radio" name="if4" value="0" id="if_string" />Natutunaw ang sorbetes na kinakain mo.</label>
<label for="if_join"><input type="radio" name="if4" value="0" id="if_join" />Katutula lang ni Binibining Reyes.</label>
<label for="if_info"><input type="radio" name="if4" value="1" id="if_info" />Bukas ay magpupunta kami sa parke ng aking mga kaibigan.</label>
<label for="if_condition"><input type="radio" name="if4"  value="0" id="if_condition" />Nagpunta ako sa simbahan.</label>

<h2>8. Ito ay halimbawa ng imperpektibo.</h2>
<label for="if_string"><input type="radio" name="if5" value="1" id="if_string"/>Natutunaw ang sorbetes na kinakain mo.</label>
<label for="if_join"><input type="radio" name="if5" value="0" id="if_join"/>Katutula lang ni Binibining Reyes.</label>
<label for="if_info"><input type="radio" name="if5" value="0" id="if_info"/>Bukas ay magpupunta kami sa parke ng aking mga kaibigan.
 </label>
<label for="if_condition"><input type="radio" name="if5"  value="0" id="if_condition"/>Nagpunta ako sa simbahan.</label>

<h2>9. Ito ay halimbawa ng perpektibo. </h2>
<label for="if_string"><input type="radio" name="if6" value="0" id="if_string" />Natutunaw ang sorbetes na kinakain mo.</label>
<label for="if_join"><input type="radio" name="if6" value="0" id="if_join" />Katutula lang ni Binibining Reyes.</label>
<label for="if_info"><input type="radio" name="if6" value="0" id="if_info" />Bukas ay magpupunta kami sa parke ng aking mga kaibigan.</label>
<label for="if_condition"><input type="radio" name="if6"  value="1" id="if_condition" />Nagpunta ako sa simbahan.</label>

<h2>10. Halimbawa ng Kontemplatibo</h2>
<label for="if_string"><input type="radio" name="if7" value="0" id="if_string"/>Pagnagdaan</label>
<label for="if_join"><input type="radio" name="if7" value="0" id="if_join"/>Pangkasalukuyan </label>
<label for="if_info"><input type="radio" name="if7" value="1" id="if_info"/>Paghinaharap</label>
<label for="if_condition"><input type="radio" name="if7"  value="0" id="if_condition"/>Kagaganap</label>

<h2>11. Ito ang tawag sa relasyon ng pandiwa sa paksa o simuno ng pangungusap. Ito ay naipapakita sa pamamagitan ng taglay na panlapi ng pandiwa.
</h2>
<label for="if_string"><input type="radio" name="if8" value="0" id="if_string" />Pokus ng pandiwa</label>
<label for="if_join"><input type="radio" name="if8" value="0" id="if_join" />Pokus sa layon</label>
<label for="if_info"><input type="radio" name="if8" value="0" id="if_info" />Lokatibong pokus</label>
<label for="if_condition"><input type="radio" name="if8"  value="1" id="if_condition" />Pokus sa direksyon</label>

<h2>12. Ilan ang pokus ng pandiwa?
</h2>
<label for="if_string"><input type="radio" name="if9" value="1" id="if_string" />7</label>
<label for="if_join"><input type="radio" name="if9" value="0" id="if_join" />6</label>
<label for="if_info"><input type="radio" name="if9" value="0" id="if_info" />8</label>
<label for="if_condition"><input type="radio" name="if9"  value="0" id="if_condition" />9</label>

<h2>13.May dalawang uri ng pandiwa.
</h2>
<label for="if_string"><input type="radio" name="if10" value="1" id="if_string" />Palipat at katawanin</label>
<label for="if_join"><input type="radio" name="if10" value="0" id="if_join" />Aksyon at karanasan
 </label>
<label for="if_info"><input type="radio" name="if10" value="0" id="if_info" />Katawanin at aksyon</label>
<label for="if_condition"><input type="radio" name="if10"  value="0" id="if_condition" />Palipat at karanasan</label>

<h2>14. Mayroong tatlong gamit ng pandiwa: ang pandiwang nagpapahayag ng _______, ________ at _______________.</h2>
<label for="if_string"><input type="radio" name="if11" value="0" id="if_string" />Aksyon
 </label>
<label for="if_join"><input type="radio" name="if11" value="0" id="if_join" />Karanasan
 </label>
<label for="if_info"><input type="radio" name="if11" value="0" id="if_info" />Pangyayari</label>
<label for="if_condition"><input type="radio" name="if11"  value="1" id="if_condition" />Lahat ng nabanggitLahat ng nabanggit</label>

<h2>15. Ang simuno o paksa ang gumaganap ng kilos sa pangungusap. Sinasagot nito ang tanong na “sino?”</h2>
<label for="if_string"><input type="radio" name="if12" value="1" id="if_string" />Aktor-pokus</label>
<label for="if_join"><input type="radio" name="if12" value="0" id="if_join" />Pokus sa layon</label>
<label for="if_info"><input type="radio" name="if12" value="0" id="if_info" />Lokatibong pokus</label>
<label for="if_condition"><input type="radio" name="if12"  value="0" id="if_condition" />Benepaktibong pokus</label>

<h2>16.Ang paksa ang layon ng pandiwa sa pangungusap. Sumasagot ito sa tanong na “ano?”</h2>
<label for="if_string"><input type="radio" name="if13" value="0" id="if_string" />Aktor-pokus</label>
<label for="if_join"><input type="radio" name="if13" value="1" id="if_join" />Pokus sa layon</label>
<label for="if_info"><input type="radio" name="if13" value="0" id="if_info" />Lokatibong pokus
</label>
<label for="if_condition"><input type="radio" name="if13"  value="0" id="if_condition" />Benepaktibong pokus
 </label>

<h2>17. Ang paksa o simuno ang lugar na ginaganapan ng pandiwa sa pangungusap. Sinasagot nito ang tanong na “saan?”</h2>
<label for="if_string"><input type="radio" name="if14" value="0" id="if_string" />Aktor-pokus
</label>
<label for="if_join"><input type="radio" name="if14" value="1" id="if_join" />Lokatibong pokus</label>
<label for="if_info"><input type="radio" name="if14" value="0" id="if_info" />Pokus sa layon</label>
<label for="if_condition"><input type="radio" name="if14"  value="0" id="if_condition" />Benepaktibong pokus</label>

<h2>18. Ang simuno o paksa ang tumatanggap sa kilos ng pandiwa sa pangungusap. Sinasagot nito ang tanong na “para kanino?”</h2>
<label for="if_string"><input type="radio" name="if15" value="0" id="if_string" />Aktor-pokus</label>
<label for="if_join"><input type="radio" name="if15" value="1" id="if_join" />Benepaktibong pokus
 </label>
<label for="if_info"><input type="radio" name="if15" value="0" id="if_info" />Pokus sa layon</label>
<label for="if_condition"><input type="radio" name="if15"  value="0" id="if_condition" />Lokatibong pokus</label>

<h2>19. Ang simuno o paksa ang kasangkapan o bagay na ginagamit upang maisagawa ang kilos ng pandiwa sa pangungusap. Sumasagot ito sa tanong na “sa pamamagitan ng ano?”
</h2>
<label for="if_string"><input type="radio" name="if16" value="0" id="if_string" />Lokatibong pokus</label>
<label for="if_join"><input type="radio" name="if16" value="1" id="if_join" />Instrumentong pokus</label>
<label for="if_info"><input type="radio" name="if16" value="0" id="if_info" />Kosatibong pokus</label>
<label for="if_condition"><input type="radio" name="if16"  value="0" id="if_condition" />Pokus sa direksyon</label>

<h2>20. Ang simuno o paksa ang nagpapahayag ng sanhi ng kilos ng pandiwa sa pangungusap. Sinasagot nito ang tanong na “bakit?”</h2>
<label for="if_string"><input type="radio" name="if17" value="0" id="if_string" />Lokatibong pokus</label>
<label for="if_join"><input type="radio" name="if17" value="1" id="if_join" />Kosatibong pokus</label>
<label for="if_info"><input type="radio" name="if17" value="0" id="if_info" />Instrumentong pokus</label>
<label for="if_condition"><input type="radio" name="if17"  value="0" id="if_condition" />Pokus sa direksyon</label>

<h2>21. Ang simuno o paksa ang nagsasaad ng direksyon ng kilos ng pandiwa sa pangungusap. Sumasagot ito sa tanong na “tungo saan o kanino?</h2>
<label for="if_string"><input type="radio" name="if18" value="0" id="if_string" />Lokatibong pokus</label>
<label for="if_join"><input type="radio" name="if18" value="1" id="if_join" />Pokus sa direksyon</label>
<label for="if_info"><input type="radio" name="if18" value="0" id="if_info" />Instrumentong pokus</label>
<label for="if_condition"><input type="radio" name="if18"  value="0" id="if_condition" />Kosatibong pokus
</label>

<h2>22. Ang uri ng pandiwang ito ay may tuwirang layon na tumatanggap ng kilos.</h2>
<label for="if_string"><input type="radio" name="if19" value="0" id="if_string" />Katawanin</label>
<label for="if_join"><input type="radio" name="if19" value="0" id="if_join" />Aksyon</label>
<label for="if_info"><input type="radio" name="if19" value="0" id="if_info" />Karanasan</label>
<label for="if_condition"><input type="radio" name="if19"  value="1" id="if_condition" />Palipat</label>

<h2>23. Ito ang uri ng pandiwa na hindi nangangailangan ng tuwirang layon na tatanggap ng kilos o galaw dahil ganap na ang diwang ipinapahayag at nakakatayo na itong mag-isa.</h2>
<label for="if_string"><input type="radio" name="if20" value="0" id="if_string" />Palipat</label>
<label for="if_join"><input type="radio" name="if20" value="0" id="if_join" />Aksyon</label>
</label>
<label for="if_info"><input type="radio" name="if20" value="0" id="if_info" />Karanasan</label>
<label for="if_condition"><input type="radio" name="if20"  value="1" id="if_condition" />Katawanin</label>

<h2>24. Sa tulong ng mga panlaping -um, mag-, ma-, mang-, maki-, o mag-an ay mabubuo ang mga pandiwang ito.
</h2>
<label for="if_string"><input type="radio" name="if21" value="0" id="if_string" />Palipat</label>
<label for="if_join"><input type="radio" name="if21" value="0" id="if_join" />Karanasan
<label for="if_info"><input type="radio" name="if21" value="1" id="if_info" />Aksyon
 </label>
<label for="if_condition"><input type="radio" name="if21"  value="0" id="if_condition" />Katawanin</label>

<h2>25. Maaaring magpahayag ang pandiwa ng karanasan, damdamin o emosyon. Sa ganitong sitwasyon, may nakararanas ng damdamin o saloobing inihudyat ng pandiwa.</h2>
<label for="if_string"><input type="radio" name="if22" value="0" id="if_string" />Palipat</label>
<label for="if_join"><input type="radio" name="if22" value="0" id="if_join" />Aksyon
</label>
<label for="if_info"><input type="radio" name="if22" value="1" id="if_info" />Karanasan</label>
<label for="if_condition"><input type="radio" name="if22"  value="0" id="if_condition" />Katawanin</label>

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



