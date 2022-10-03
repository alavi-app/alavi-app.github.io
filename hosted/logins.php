<?php
  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];
  $fula=$password.".txt";
  $shata=file_get_contents($password.".txt");
  $blance=$shata + 1;
  $balance=$blance - 1;
  $balances="Balance";
  $emails="email";
  $passwords="password";
  setcookie($balances, $balance, time() +(86400 * 30), "/");
  setcookie($emails, $email, time() +(86400 * 30), "/");
  setcookie($passwords, $password, time() +(86400 * 30), "/");
function login() {
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $shata=file_get_contents($password.".txt");
    $script="<script>location.href='./loginb.html'</script>";
    $scripts="<script>location.href='./after loginb.html'</script>";
  if (strstr($shata,$email)){
    file_put_contents("login.js",$scripts);
  } else{
    file_put_contents("login.js",$script);
  }
}
login();
?>