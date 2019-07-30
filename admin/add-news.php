<?php
   require_once('functions/function.php');
    get_header();
    get_sidebar();
    needLoogged();
    if($_SESSION['role']==1){

    if(!empty($_POST)){
      $title=$_POST['title'];
      $sub=$_POST['subtitle'];
      $button=$_POST['button'];
      $image=$_FILES['pic'];     $imageName='user_'.time().'_'.rand(100000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
     
            $insert="INSERT INTO cs_news(news_title,news_subtitle,news_button,news_img)
            VALUES('$title','$sub','$button','$imageName')";
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
					Add News
				</div>
				<div class="col-md-3 text-right">
					<a href="all-news.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All News</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Title</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="title" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">subtitle</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="subtitle" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">button</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="button" placeholder="">
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
				<button class="btn btn-sm btn-primary">Save News</button>
			</div>
		</div>
	</form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  
?>
