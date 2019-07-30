<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM cs_news WHERE news_id='$id'";
    mysqli_query($con,$del);
    header('Location: all-news.php');
?>
