<?php 

//$dev=$POST['device'];
$dev="1234";
$bar=$_POST['light0'];
$gas=$_POST['gas'];
$f=$_POST['Count'];
$l1=$_POST['light1'];
if($l1>1000)
$l1=1001;
$l2=$_POST['light2'];
if($l2>1000)
$l2=1001;

$f1="/home/www/onlinesmartparking.xyz/owner/".$dev."/bar.txt";
$f2="/home/www/onlinesmartparking.xyz/owner/".$dev."/gas.txt";
$f3="/home/www/onlinesmartparking.xyz/owner/".$dev."/file.txt";
$f4="/home/www/onlinesmartparking.xyz/owner/".$dev."/count.txt";

$h1=fopen($f1,"w+");
$h2=fopen($f2,"w+");
$h3=fopen($f3,"w+");
$h4=fopen($f4,"a+");

fwrite($h1,$bar);
fwrite($h2,$gas);
fwrite($h3,$l1);
fwrite($h3,"\n");
fwrite($h3,$l2);
fwrite($h3,"\n");

if($f==1){
	fwrite($h4,$f);
	fwrite($h4,"\n");
}

fclose($h1);
fclose($h2);
fclose($h3);
fclose($h4);
/*
if (!$handle = fopen($f1, 'w+')) {
    die("Failed to open log file");
}

// Write $logline to our logfile.
if (fwrite($handle, $bar) === FALSE) {
    die("Failed to write to log file");
}

fclose($handle);*/
?>