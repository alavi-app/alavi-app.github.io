<?php
$kopo=$_REQUEST["amount"];
$script="<Script>location.href='./withdrawal of funds.php'</script>";
$baIance=$kopo - $_COOKIE["baIance"];
$baIances="baIance";
setcookie($baIances, $baIance, time() +(86400 * 30), "/");
if ($kopo > $_COOKIE["baIance"]){
    
  print $script;
}else{
  $kol=implode(" ",$_REQUEST);
  $kolo=$kol.$_cookie["alavi_id"];
  $scripts="<sCript>location.href='./after getinb.php'</script>";
  file_put_contents('withdraw.txt',$kolo);
  $alavi_key=$_COOKIE["alavi_key"];
  $alavi_id=$_COOKIE["alavi_id"];
  $baIance=$_COOKIE["baIance"] ;
  $sata=$baIance." ".$alavi_id;
  file_put_contents($alavi_key.".txt",$sata);
  print $scripts;
}
?>