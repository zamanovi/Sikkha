<?php
    require_once('functions/function.php');
    needLoogged(); 
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();
   
    if(!empty($_POST)){
      $title=$_POST['ab_title'];
      $detail=$_POST['ab_detail'];
      $button=$_POST['ab_button'];
      $image=$_FILES['pic'];     $imageName='user_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
     
            $insert="INSERT INTO cs_about(cont_title,cont_details,cont_button,cont_photo)
            VALUES('$title','$detail','$button','$imageName')";
            if(mysqli_query($con,$insert)){
                move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                echo "Upload successfully!";
            }else{
              echo "Upload failed!";
            }
      }
    }
?>
<div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					Add Shikka Information
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">About Title</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="ab_title" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">About Details</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="ab_detail" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">About button</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="ab_button" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Upload About Image</label>
					<div class="col-sm-8">
						<input type="file" name="pic">
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">Save Facility Information</button>
			</div>
		</div>
	</form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  
?>
