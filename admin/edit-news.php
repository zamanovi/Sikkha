<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['e'];
    $sel="SELECT * FROM cs_news WHERE news_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $sub=$_POST['sub'];
        $update="UPDATE cs_news SET news_title='$title', news_subtitle='$sub'
        WHERE news_id='$eid'";

        if(mysqli_query($con,$update)){
            header('Location: view-news.php?v='.$eid);
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
                    Update News Information
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
                        <input type="hidden" value="<?= $data['news_id'];?>" name="eid" />
                        <input type="text" class="form-control" name="title" value="<?= $data['news_title'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Subtitle</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="sub" value="<?= $data['news_subtitle'];?>">
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
