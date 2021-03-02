<?php
  
  if(isset($_POST)) {
    proses();
  } else {
    cabut();
  }
  
  function cabut() {
    header("Location: test.php");
    die();
  }
  
  function proses() {
    var_dump($_POST);
  }
?>