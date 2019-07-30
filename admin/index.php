<?php
    require_once('functions/function.php');
    needLoogged();
    get_header();
    get_sidebar();
?>

      <div class="col-md-12">
          Welcome Mr. <?= $_SESSION['name'];?>
      </div><!--col-md-12 end-->
<?php
    get_footer();
?>
