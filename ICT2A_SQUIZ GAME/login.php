
<!DOCTYPE html>
<html>
	<head>
		<?php include('header.php') ?>
        <?php 
        session_start();
        if(isset($_SESSION['login_id'])){
            header('Location:home.php');
        }
        ?>
		<title>Login</title>
        <link rel="stylesheet" href="admin.css">
    </head>

    <body id='login-body' class="bg-light">
        <div class="card">
                <div class="card1">
                    <strong>Login</strong>
                </div>
            <div class="card-body">
                     <form id="login-frm">
                        <div class="form-group" style="color: #48D1CC;">
                            <label><b>Username</b></label>
                            <input type="username" name="username" class="form-control">
                        </div>
                        <div class="form-group"style="color: #48D1CC;">
                            <label><b>Password</b></label>
                            <input type="password" name="password" class="form-control">
                        </div> 
                        <div class="form-group text-right">
                            <button class="btn" name="submit"><img src="image/logintext.png" style="width:20%; height: 30%;top: 20% ;"></button>
                        </div>
                          <div class="dropdown">
  <button class="dropbtn"><img src="image/reg.png"></button>
  <div class="dropdown-content">
    <a href="facultyreg.php">Teacher Registration Form</a>
    <a href="studentreg.php">Student Registration Form</a>
    
  </div>

                    </form>
                  
</div>

            </div>
        </div>
        </body>
  <div class="button3">
            <a href="front.php" class="btn1"><img src="image/back.png" style="width: 10%; height: 15%; position: fixed; top: 80%; z-index: 990;"></a>
        </div>
        <script>
            $(document).ready(function(){
                $('#login-frm').submit(function(e){
                    e.preventDefault()
                    $('#login-frm button').attr('disable',true)
                    $('#login-frm button').html('Please wait...')

                    $.ajax({
                        url:'./login_auth.php',
                        method:'POST',
                        data:$(this).serialize(),
                        error:err=>{
                            console.log(err)
                            alert('An error occured');
                            $('#login-frm button').removeAttr('disable')
                            $('#login-frm button').html('Login')
                        },
                        success:function(resp){
                            if(resp == 1){
                                location.replace('home.php')
                            }else{
                                alert("Incorrect username or password.")
                                $('#login-frm button').removeAttr('disable')
                                $('#login-frm button').html('Login')
                            }
                        }
                    })

                })
            })
        </script>
        <style>
              body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(99.9deg, rgba(27, 24, 31, 1) 21.2%, rgba(50, 4, 89, 1) 84.8%);
        }
/* Style The Dropdown Button */
.dropbtn {
  background-size: 50%;
  padding: 10px;
  font-size: 10px;
  border: none;
  cursor: pointer;
  
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  
}
</style>
</html>