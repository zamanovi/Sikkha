<?php
    require_once('functions/function.php');
   needLoogged();
 
    if($_SESSION['role']==1){

    get_header();
    get_sidebar();
   
    if(!empty($_POST)){
      $title=$_POST['fac_title'];
      $subtitle=$_POST['fac_subtitle'];
            $insert="INSERT INTO cs_facility(facility_title,facility_subtitle)
            VALUES('$title','$subtitle')";
            if(mysqli_query($con,$insert)){
                echo "Upload successfully!";
            }else{
              echo "Upload failed!";
            }
      }
    }
?>
<div class="col-md-12">
	<form class="form-horizontal" action="" method="post">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					Add facility Information
				</div>
				<div class="col-md-3 text-right">
					<a href="all-facility.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All facility</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Facility Title</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="fac_title" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Facility Subtitle</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="fac_subtitle" placeholder="">
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
