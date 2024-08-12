<?php
$email = "не определен";
$tel1 = "не определен";
$tel2 = "не определен";
$last = "не определен";
$name = "не определен";
$dadname = "не определен";
$date = "не определен";
$radio = "не определен";


if(isset($_POST["email"]))
{
  
    $email= $_POST["email"];
}
if(isset($_POST["tel1"]))
{
  
    $tel1 = $_POST["tel1"];
}
if(isset($_POST["tel2"]))
{
  
    $tel2 = $_POST["tel2"];
}
if(isset($_POST["last"]))
{
  
    $last = $_POST["last"];
}
if(isset($_POST["name"]))
{
  
    $name = $_POST["name"];
}
if(isset($_POST["dadname"]))
{
  
    $dadname = $_POST["dadname"];
}


if(isset($_POST["date"]))
{
  
    $date = $_POST["date"][0] . $_POST["date"][1] . $_POST["date"][2];
}
if(isset($_POST["radio"]))
{
  if($_POST["radio"] == 1){
  	$radio = "Мужской";
  } else{
  	$radio = "Женский"; 
  }
}
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
$to = "aelbert.kaitmazov@gmail.com";
$subject = "Новое";
$body =  "$emailя \r\n";
if (mail($to, $subject, $body)){
	echo "123";
} else{
	echo "234";
}