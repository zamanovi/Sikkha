<?php
    require_once('functions/function.php');
    needLoogged(); 
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();
       if(isset($_POST['submit'])){
        $facebook=$_POST['facebook'];
        $twitter=$_POST['twitter'];
        $linkedin=$_POST['linkedin'];
        $youtube=$_POST['youtube'];
        $pinterest=$_POST['pinterest'];
        $google=$_POST['google'];
        $update="UPDATE social_media SET sm_facebook='$facebook',sm_twitter='$twitter',
        sm_linkedin='$linkedin',sm_youtube='$youtube',sm_pinterest='$pinterest',sm_google='$google' WHERE sm_id=1";
        if(mysqli_query($con,$update)){
          echo '<script>alert("Social media Information updated!")</script>';
        }else{
            echo '<script>alert("Hoi nai!")</script>';
        }
   
    }
?>
<div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					Update Social Media Information
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<?php
				$sel="SELECT * FROM social_media WHERE sm_id='1'";
				$Qr=mysqli_query($con,$sel);
				$data=mysqli_fetch_assoc($Qr);
				?>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-facebook"></i></div>
							<input type="text" class="form-control" name="facebook" value="<?= $data['sm_facebook'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
							<input type="text" class="form-control" name="linkedin" value="<?= $data['sm_linkedin'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-youtube"></i></div>
							<input type="text" class="form-control" name="youtube" value="<?= $data['sm_youtube'];?>">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-twitter"></i></div>
							<input type="text" class="form-control" name="twitter" value="<?= $data['sm_twitter'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-pinterest"></i></div>
							<input type="text" class="form-control" name="pinterest" value="<?= $data['sm_pinterest'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-google"></i></div>
							<input type="text" class="form-control" name="google" value="<?= $data['sm_google'];?>">
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button type="submit" name="submit" class="btn btn-sm btn-primary" style="font-weight:bold;">UPDATE INFORMATION</button>
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
