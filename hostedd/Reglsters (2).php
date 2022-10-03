<?php
  $alavi_id=$_REQUEST["alavi_id"];
  $baIance="0";
  $alavi_key=$_REQUEST["alavi_key"];
  $cata=$baIance." ".$alavi_id ;
  $fula=$alavi_key.".txt";
  $baIances="baIance";
  $alavi_ids="alavi_id";
  $alavi_keys="alavi_key";
  setcookie($baIances, $baIance, time() +(86400 * 30), "/");
  setcookie($alavi_ids, $alavi_id, time() +(86400 * 30), "/");
  setcookie($alavi_keys, $alavi_key, time() +(86400 * 30), "/");
function Reglster(){
   $alavi_id=$_REQUEST["alavi_id"];
  $baIance="0";
  $alavi_key=$_REQUEST["alavi_key"];
  $cata=$baIance." ".$alavi_id ;
  $fula=$alavi_key.".txt";
  file_put_contents($fula, $cata);
}
Reglster();
$script="<script>"."location.href='./https://dccm.000webhostapp.com/Reglster2b.php'</script>";
$scripts="<script>"."location.href='./https://dccm.000webhostapp.com/after https://dccm.000webhostapp.com/getinb.php'</script>";
$cool=$alavi_key.".txt";
if (!0){
    print $scripts;
}else{
  print $script;
}
?>