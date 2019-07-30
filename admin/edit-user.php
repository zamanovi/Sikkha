<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['e'];
    $sel="SELECT * FROM cs_user WHERE user_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $role=$_POST['role'];

        $update="UPDATE cs_user SET user_name='$name', user_phone='$phone',user_email='$email',role_id='$role'
        WHERE user_id='$eid'";

        if(mysqli_query($con,$update)){
            header('Location: view-user.php?v='.$eid);
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
                    Update User Information
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
                  <input type="hidden" value="<?= $data['user_id'];?>" name="eid"/>
                  <input type="text" class="form-control" name="name" value="<?= $data['user_name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" value="<?= $data['user_phone'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" value="<?= $data['user_email'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?= $data['user_username'];?>" disabled>
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
                      <option value="<?= $ur['role_id'];?>" <?php if($data['role_id']== $ur['role_id']){echo 'selected';}?>><?= $ur['role_name'];?></option>
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
            <button class="btn btn-sm btn-primary">UPDATE</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
