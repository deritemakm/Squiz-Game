<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	
	<title>Faculty List</title>
</head>
<body id='login-body' class="bg-light" style="background-image: url(image/regbg.jpg);background-size: cover;">
						<form id='student-frm'>
							<div class ="modal-body">
								<div id="msg"></div>
								<div class="card1">
                    <strong>Student Registration Form</strong>
                </div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Name</b></label>
									<input type="hidden" name="id" />
									<input type="hidden" name="uid" />
									<input type="hidden" name="user_type" value = '3' />
									<input type="text" name="name" required="required" class="form-control" />
								</div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Level-Section</b></label>
									<input type="text" name ="level_section" required="" class="form-control" />
								</div>
								<div class="form-group"style="color: #48D1CC;">
									<label><b>Usernam</b></label>
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
						</form>
					</div>
				</div>
			</div>
</body>
<script>
	$(document).ready(function(){
		$('#table').DataTable();
		$('#new_student').click(function(){
			$('#msg').html('')
			$('#manage_student .modal-title').html('Add New student')
			$('#manage_student #student-frm').get(0).reset()
			$('#manage_student').modal('show')
		})
		$('.edit_student').click(function(){
			var id = $(this).attr('data-id')
			$.ajax({
				url:'./get_student.php?id='+id,
				error:err=>console.log(err),
				success:function(resp){
					if(typeof resp != undefined){
						resp = JSON.parse(resp)
						$('[name="id"]').val(resp.id)
						$('[name="uid"]').val(resp.uid)
						$('[name="name"]').val(resp.name)
						$('[name="level_section"]').val(resp.level_section)
						$('[name="username"]').val(resp.username)
						$('[name="password"]').val(resp.password)
						$('#manage_student .modal-title').html('Edit Student')
						$('#manage_student').modal('show')

					}
				}
			})

		})
		$('.remove_student').click(function(){
			var id = $(this).attr('data-id')
			var conf = confirm('Are you sure to delete this data.');
			if(conf == true){
				$.ajax({
				url:'./delete_student.php?id='+id,
				error:err=>console.log(err),
				success:function(resp){
					if(resp == true)
						location.reload()
				}
			})
			}
		})
		$('#student-frm').submit(function(e){
			e.preventDefault();
			$('#student-frm [name="submit"]').attr('disabled',true)
			$('#student-frm [name="submit"]').html('Saving...')
			$('#msg').html('')

			$.ajax({
				url:'./save_student.php',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert('An error occured')
					$('#student-frm [name="submit"]').removeAttr('disabled')
					$('#student-frm [name="submit"]').html('Save')
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