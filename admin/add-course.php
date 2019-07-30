<?php
    require_once('functions/function.php');
    needLoogged(); 
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();
   
    if(!empty($_POST)){
      $btntitle=$_POST['btn_title'];
      $c_title=$_POST['course_title'];
      $c_detail=$_POST['course_detail'];
      $c_button=$_POST['course_button'];
      $image=$_FILES['pic'];     $imageName='user_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
     
            $insert="INSERT INTO cs_course(course_btntitle,course_title,course_subtitle,course_button,
			course_photo)
            VALUES('$btntitle','$c_title','$c_detail',
			'$c_button','$imageName')";
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
					Add Course Information
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Course Button Title</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="btn_title" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Course Title</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="course_title" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Course detail</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="course_detail" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Course Button</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="course_button" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Upload course Image</label>
					<div class="col-sm-8">
						<input type="file" name="pic">
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">Save Course Information</button>
			</div>
		</div>
	</form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  
?>
