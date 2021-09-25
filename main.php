<?php
//MD5
$md5=$_POST['md5'];
if($md5!=null){
    echo"output after using md5() \n".md5($md5)."<br>";
}
//number_format
$nf=$_POST['nf'];
if($nf!=null){
    echo "output after using number_format() \n".number_format($nf)."<br>";
}
//ord
$ord=$_POST['ord'];
if($ord!=null){
  echo "output after using number_format() \n ".ord($ord)."<br>";
}
//rtrim
$rtrim=$_POST['rtrim'];
$charlist=$_POST['charlist'];
if($rtrim!=null){
  echo "output after using rtrim() \n ". rtrim($rtrim,$charlist)."<br>";
}
//replace
$main_str=$_POST['main_str'];
$replace_str=$_POST['replace_str'];
$new_str=$_POST['new_str'];
if($main_str!=null){
  echo " output after using str_replace() \n". str_replace($replace_str,$new_str,$main_str) ."<br>";
}
//strlen
$strlen=$_POST['strlen'];
if($strlen!=null){
  echo " output after using strlen() \n" . strlen($strlen)."<br>";
}

//strnatcasecmp
$strcmp=$_POST['strcmp'];
$strcmp2=$_POST['strcmp2'];
if($strcmp!=null){
  echo" output after using strnatcasecmp() \n".strnatcasecmp($strcmp,$strcmp2)."<br>";
}
//strpos
$strpos=$_POST['strpos'];
$strpos2=$_POST['strpos2'];
if($strpos!=null){
  echo" output after using strpos() \n". strpos($strpos,$strpos2)."<br>";
}
//substr
$substr=$_POST['substr'];
$substr2=$_POST['substr2'];
if($substr!=null){
  echo "output after using substr() \n". substr($substr,$substr2)."<br>";
}
//strtolower
$strtolower=$_POST['strtolower'];
if($strtolower!=null){
  echo "output after using strtolower() \n". strtolower($strtolower)."<br>";
}
//bin2hex
$bin2hex=$_POST['bin2hex'];
if($bin2hex!=null){
  echo "output after using bin2hex() \n ". bin2hex($bin2hex)."<br>";
}
//chop
$chop=$_POST['chop'];
$chop1=$_POST['chop1'];
if($chop!=null){
  echo "output affter using chop() \n". chop($chop,$chop1)."<br>";
}


?>