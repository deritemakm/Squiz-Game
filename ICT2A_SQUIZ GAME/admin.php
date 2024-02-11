
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
		<title>Admin | Squiz Game</title>
        <link rel="stylesheet" href="admin.css">
    </head>

    <body id='login-body' class="bg-light" style="background-image: url(image/frontbg.png);background-size: cover;">
        <div class="card">
                <div class="card1">
                    <strong>Login</strong>
                </div>
            <div class="card-body">
                     <form id="login-frm">
                        <div class="form-group"style="color: #48D1CC;">
                            <label><b>Username</b></label>
                            <input type="username" name="username" class="form-control">
                        </div>
                        <div class="form-group"style="color: #48D1CC;">
                             <label><b>Password</b></label>
                            <input type="password" name="password" class="form-control">
                        </div> 
                       <div class="form-group text-right">
                            <button class="btn" name="submit"><img src="image/logintext.png" style="width:20%; height: 30%;"></button>
                        </div>
                        
                    </form>
            </div>
        </div>
    <div class="button3">
            <a href="front.php" class="btn1"><img src="image/back.png" style="width: 10%; height: 20%; position: fixed; top: 80%; z-index: 990;"></a>
        </div>

        </body>

        <script>
            $(document).ready(function(){
                $('#login-frm').submit(function(e){
                    e.preventDefault()
                    $('#login-frm button').attr('disable',true)
                    $('#login-frm button').html('Please wait...')

                    $.ajax({
                        url:'./login_auth.php?type=1',
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
</html>