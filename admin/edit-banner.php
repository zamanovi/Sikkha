<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['e'];
    $sel="SELECT * FROM cs_banner WHERE ban_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $sub=$_POST['sub'];
        $button=$_POST['button'];
        $update="UPDATE cs_banner SET ban_title='$title', ban_subtitle='$sub',ban_button='$button'
        WHERE ban_id='$eid'";

        if(mysqli_query($con,$update)){
            header('Location: view-banner.php?v='.$eid);
        }else{
            echo 'Update failed!';
        }
    }
?>
<div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="col-md-9 heading_title">
					Update Banner Information
				</div>
				<div class="col-md-3 text-right">
					<a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Banner Title</label>
					<div class="col-sm-8">
						<input type="hidden" value="<?= $data['ban_id'];?>" name="eid" />
						<input type="text" class="form-control" name="title" value="<?= $data['ban_title'];?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Banner Subtitle</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="sub" value="<?= $data['ban_subtitle'];?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Banner Button</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="button" value="<?= $data['ban_button'];?>">
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button class="btn btn-sm btn-primary">UPDATE</button>
			</div>
		</div>
	</form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
?>
