<?php
  $emalL=$_REQUEST["emalL"];
  $baIance="0";
  $alavi_key=$_REQUEST["alavi_key"];
  $cata=$baIance." ".$emalL ;
  $fula=$alavi_key.".txt";
  $baIances="baIance";
  $emalLs="emalL";
  $alavi_keys="alavi_key";
  setcookie($baIances, $baIance, time() +(86400 * 30), "/");
  setcookie($emalLs, $emalL, time() +(86400 * 30), "/");
  setcookie($alavi_keys, $alavi_key, time() +(86400 * 30), "/");
function Reglster(){
   $emalL=$_REQUEST["emalL"];
  $baIance="0";
  $alavi_key=$_REQUEST["alavi_key"];
  $cata=$baIance." ".$emalL ;
  $fula=$alavi_key.".txt";
  file_put_contents($fula, $cata);
}
Reglster();
$script="<script>"."location.href='./Reglster2b.php'</script>";
$scripts="<script>"."location.href='./after getinb.php'</script>";
$cool=$alavi_key.".txt";
if (!0){
    print $scripts;
}else{
  print $script;
}
?>