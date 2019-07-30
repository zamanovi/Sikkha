<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All Banner Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="add-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Banner</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <!--<form method="get" action="search-user.php" class="form-inline" style="margin-bottom:20px;">
                <div class="form-group">
                  <input type="text" name="search" class="form-control" id="" placeholder="">
                </div>

                <button type="submit" class="btn btn-default">SEARCH</button>
              </form>!-->
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head" style="background-color:#000;color:#fff;">
                		<tr>
                    	<th>Title</th>
                        <th>Subtitle</th>
                        <th>Button</th>
                        <th class="hidden-xs">Photo</th>
                        <th>Manage</th>
                    </tr>
                	</thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM cs_banner ORDER BY ban_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                    	<tr>
                      	  <td><?= substr($data['ban_title'],0,20);?>....</td>
                          <td><?= substr($data['ban_subtitle'],0,30);?>.....</td>
                          <td><?= $data['ban_button'];?></td>
                        
                          <td class="hidden-xs">
                              <img src="uploads/<?= $data['ban_photo'];?>" height="50" width="100"/>
                              
                          </td>
                          <td>
                          	<a href="view-banner.php?v=<?= $data['ban_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                            <a href="edit-banner.php?e=<?= $data['ban_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                            <a href="delete-user.php?d=<?= $data['ban_id'];?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>

                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
