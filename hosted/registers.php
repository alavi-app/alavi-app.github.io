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
  $emaila="email";
  $email=finder ($emaila);
  $balance="0";
  $passworda="password";
  $password=finder ($passworda);
  $cata=$balance." ".$email ;
  $fula=$password.".txt";
  $balances="Balance";
  $emails="email";
  $passwords="password";
  setcookie($balances, $balance, time() +(86400 * 30), "/");
  setcookie($emails, $email, time() +(86400 * 30), "/");
  setcookie($passwords, $password, time() +(86400 * 30), "/");
function register(){
  $emaila="email";
  $email=finder ($emaila);
  $balance="0";
  $passworda="password";
  $password=finder ($passworda);
  $cata=$balance." ".$email ;
  $fula=$password.".txt";
  file_put_contents($fula, $cata);
}
register();
$script="<script>"."location.href='./register2b.html'</script>";
$scripts="<script>"."location.href='./after loginb.html';document.cookie=".""".$balances.'='.$balance.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$emails."=".$email.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";document.cookie=".""".$passwords."=".$password.";expires=thu, 18 Dec 2023 12:00:00 utc; path=/".""".";</script>";
$cool=$password.".txt";
if (!0){
  file_put_contents('regi.js', $scripts);
}else{
  file_put_contents('regi.js', $script);
}
?>