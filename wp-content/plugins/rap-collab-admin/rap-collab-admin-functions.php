<?php

if(isset($_POST['action']) && !empty($_POST['action'])) {
  $approval = $_POST['action'];
  echo $approval;
}
//echo 'working'
?>
