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
  $freda="fred";
  $fred=finder ($freda);
  $balance="0";
  $joea="joe";
  $joe=finder ($joea);
  $cata=$balance." ".$fred ;
  $fula=$joe.".txt";
  $balances="Balance";
  $freds="fred";
  $joes="joe";
  setcookie($balances, $balance, time() +(86400 * 30), "/");
  setcookie($freds, $fred, time() +(86400 * 30), "/");
  setcookie($joes, $joe, time() +(86400 * 30), "/");
function register(){
  $freda="fred";
  $fred=finder ($freda);
  $balance="0";
  $joea="joe";
  $joe=finder ($joea);
  $cata=$balance." ".$fred ;
  $fula=$joe.".txt";
  file_put_contents($fula, $cata);
}
register();
$script="<script>"."location.href='./register2b.html'</script>";
$scripts="<script>"."location.href='./after loginb.html';document.cookie=".""".$balances.'='.$balance.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$freds."=".$fred.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$joes."=".$joe.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";</script>";
$cool=$joe.".txt";
if (!0){
  file_put_contents('regi.js', $scripts);
}else{
  file_put_contents('regi.js', $script);
}
?>