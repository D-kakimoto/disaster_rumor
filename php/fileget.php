<?php
header("Content-type: text/plain; charset=UTF-8");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
  if (isset($_POST['type'])&&$_POST['type']=="week"){
    $rumors_week = file_get_contents("../txt/rumor_week.txt");
    echo $rumors_week;
  }elseif(isset($_POST['type'])&&$_POST['type']=="all"){
    $rumors_all = file_get_contents("../txt/rumor_all.txt");
    echo $rumors_all;
  }else{
    echo "エラー";
  }
}
?>
