<div class="container-fluid content_full">
    <div class="row">
        <div class="col-md-2 sidebar pd0">
          <div class="side_user">
              <img class="img-responsive" src="images/avatar.png"/>
                <h4><?= $_SESSION['name'];?></h4>
                <span><i class="fa fa-circle"></i> Online</span>
            </div>
            <h2>MAIN NAVIGATION</h2>
            <ul>
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <?php if($_SESSION['role']=='1'){ ?>
                <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
              <?php } ?>
                <li><a href="add-banner.php"><i class="fa fa-gamepad"></i> Banner</a></li>
                <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                <li><a href="add-news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</a></li>
                <li><a href="add-event.php"><i class="fa fa-life-ring" aria-hidden="true"></i>Events</a></li>
                 <li><a href="add-course.php"><i class="fa fa-snowflake-o" aria-hidden="true"></i>Courses</a></li>
                <li><a href="add-team.php"><i class="fa fa-universal-access" aria-hidden="true"></i>Teams</a></li>
                   <li><a href="add-social.php"><i class="fa fa-medium" aria-hidden="true"></i>Social Media</a></li>
                <li><a href="all-message.php"><i class="fa fa-male" aria-hidden="true"></i>Advisor</a></li>
                <li><a href="all-message.php"><i class="fa fa-comments"></i> Contact Message</a></li>
                
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div><!--sidebar end-->
        <div class="col-md-10 admin-part pd0">
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Dashboard</a></li>
            </ol>
