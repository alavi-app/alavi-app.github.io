<?php
  function finder ($x){
    $roll=$_SERVER['HTTP_REFERRER'];
    $john=strstr($roll,$x);
    $papa=substr($roll,$john);
    $loo="=";
    $goo="&";
    $fun=strstr($papa,$loo);
    $gun=strstr($papa,$goo);
    $fly=$gun-$fun;
    $point=substr($papa,$fun,$fly);
    return $point;
  }
  $hoho=$_SERVER['HTTP_REFERRER'];
  $freda="fred";
  $fred=finder ($freda);
  $joea="joe";
  $joe=finder ($joea);
  $fula=$joe.".txt";
  $shata=file_get_contents($joe.".txt");
  $blance=$shata + 1;
  $balance=$blance - 1;
  $balances="Balance";
  $freds="fred";
  $joes="joe";
  setcookie($balances, $balance, time() +(86400 * 30), "/");
  setcookie($freds, $fred, time() +(86400 * 30), "/");
  setcookie($joes, $joe, time() +(86400 * 30), "/");
function login() {
    $fred=$_REQUEST["fred"];
    $joe=$_REQUEST["joe"];
    $shata=file_get_contents($joe.".txt");
    $scripts="<script>location.href='./after loginb.html';document.cookie=".""".$balances.'='.$balance.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$freds."=".$fred.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$joes."=".$joe.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";</script>";
    $script="<script>location.href='./loginb.html'</script>";
  if (strstr($shata,$fred)){
    file_put_contents("login.js",$scripts);
  } else{
    file_put_contents("login.js",$script);
  }
}
login();
?>