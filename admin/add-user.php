<?php
    require_once('functions/function.php');
   
    get_header();
    get_sidebar();
    needLoogged();
    if($_SESSION['role']==1){
		
    if(!empty($_POST)){
      $name=$_POST['name'];
      $phone=$_POST['cell'];
      $email=$_POST['email'];
      $user=$_POST['username'];
      $pw=md5($_POST['pass']);
      $rpw=md5($_POST['repass']);
      $role=$_POST['role'];
      $image=$_FILES['pic'];
      $imageName='user_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
      if(!empty($name)){
        if($pw==$rpw){
            $insert="INSERT INTO cs_user(user_name,user_phone,user_email,user_username,user_password,user_photo,role_id)
            VALUES('$name','$phone','$email','$user','$pw','$imageName','$role')";
            if(mysqli_query($con,$insert)){
                move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                echo "Registration success!";
            }else{
              echo "Registration failed!";
            }
        }else{
            echo "Password did not match!";
        }
      }else{
        echo "Please enter your name!";
      }
    }
?>
<div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					User Registration
				</div>
				<div class="col-md-3 text-right">
					<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Name</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="name" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Phone</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="cell" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" name="email" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Username</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="username" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" name="pass" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Confirm Password</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" name="repass" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">User Role</label>
					<div class="col-sm-4">
						<select class="form-control select_cus" name="role">
							<option value="">Select Role</option>
							<?php
                          $selr="SELECT * FROM cs_role ORDER BY role_id ASC";
                          $QR=mysqli_query($con,$selr);
                          while($ur=mysqli_fetch_assoc($QR)){
                      ?>
							<option value="<?= $ur['role_id'];?>">
								<?= $ur['role_name'];?>
							</option>
							<?php
                        }
                      ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Upload</label>
					<div class="col-sm-8">
						<input type="file" name="pic">
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">REGISTRATION</button>
			</div>
		</div>
	</form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  }else{
    echo "Your have no access permission!";
  }
?>
