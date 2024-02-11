<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	
	<title>Faculty List</title>
</head>
<body  id='login-body' class="bg-light" style="background-image: url(image/regbg.jpg);background-size: cover;">>
						<form id='faculty-frm'>
							<div class ="modal-body">
								<div id="msg"></div>
								<div class="card1">
                    <strong>Faculty Registration Form</strong>
                </div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Name</b></label>
									<input type="hidden" name="id" />
									<input type="hidden" name="uid" />
									<input type="hidden" name="user_type" value = '2' />
									<input type="text" name="name" required="required" class="form-control" />
								</div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Subject</b></label>
									<input type="text" name ="subject" required="" class="form-control" />
								</div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Username</b></label>
									<input type="text" name ="username" required="" class="form-control" />
								</div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Password</b></label>
									<input type="password" name="password" required="required" class="form-control" />
								</div>
							
							<div class="form-group"style="color: white;">
								<button  class="btn btn-info" name="save"><span class="glyphicon glyphicon-save"></span>Submit</button>
								<a href="login.php" class="btn btn-info">Sign Up</a>
								</div>
								
							</div>
						
						</form>
					</div>
				</div>
			</div>
</body>
<script>
	
		$('#faculty-frm').submit(function(e){
			e.preventDefault();
			$('#faculty-frm [name="submit"]').attr('disabled',true)
			$('#faculty-frm [name="submit"]').html('Saving...')
			$('#msg').html('')

			$.ajax({
				url:'./save_faculty.php',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An error occured')
					$('#faculty-frm [name="submit"]').removeAttr('disabled')
					$('#faculty-frm [name="submit"]').html('Save')
				},
				success:function(resp){
					if(typeof resp != undefined){
						resp = JSON.parse(resp)
						if(resp.status == 1){
							alert('Data successfully saved');
							location.reload()
						}else{
						$('#msg').html('<div class="alert alert-danger">'+resp.msg+'</div>')

						}
					}
				}
			})
		})
	
</script>

<style>
	.modal-body{
  position: fixed;
  margin-top: 30%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 250px 40px;
  padding-top: 20px;
  width: 400px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.04);
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}
.card1{
  width: 50%;
  height: 30%;
  margin: 0px auto 0px;
  color: white;
  text-align: center;
  justify-content: center;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 10px;

}


</style>
</html>