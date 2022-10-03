<?php
  $alavi_id=$_REQUEST["alavi_id"];
  $alavi_key=$_REQUEST["alavi_key"];
  $fula=$alavi_key.".txt";
  $shata=file_get_contents($alavi_key.".txt");
  $blance=$shata + 1;
  $baIance=$blance - 1;
  $baIances="baIance";
  $alavi_ids="alavi_id";
  $alavi_keys="alavi_key";
  setcookie($baIances, $baIance, time() +(86400 * 30), "/");
  setcookie($alavi_ids, $alavi_id, time() +(86400 * 30), "/");
  setcookie($alavi_keys, $alavi_key, time() +(86400 * 30), "/");
function getin() {
    $alavi_id=$_REQUEST["alavi_id"];
    $alavi_key=$_REQUEST["alavi_key"];
    $shata=file_get_contents($alavi_key.".txt");
    $script="<script>location.href='./https://dccm.000webhostapp.com/getinb.php'</script>";
    $scripts="<script>location.href='./https://dccm.000webhostapp.com/after https://dccm.000webhostapp.com/getinb.php'</script>";
  if (strstr($shata,$alavi_id)){
      print $scripts;
  } else{
      print $script;
  }
}
getin();
?>