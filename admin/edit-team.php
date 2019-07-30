<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['e'];
    $sel="SELECT * FROM cs_team WHERE team_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $des=$_POST['des'];
        $cont=$_POST['cont'];
        $update="UPDATE cs_team SET team_name='$name',team_des='$des',team_cont='$cont'
        WHERE team_id='$eid'";

        if(mysqli_query($con,$update)){
          echo 'Update sucessfully!';
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
                    Update Team Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Team</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-8">
                  <input type="hidden" value="<?= $data['team_id'];?>" name="eid"/>
                  <input type="text" class="form-control" name="name" value="<?= $data['team_name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Designation</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="des" value="<?= $data['team_des'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Content</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="cont" value="<?= $data['team_cont'];?>">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">UPDATE TEAM</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
