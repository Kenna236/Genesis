<?php 
//   echo date("Y.M.D");

//timestamp
//   echo Time();

//total number of days in a month
//echo date("t");

// check for leap year
// echo date("L");

//day of the week
//echo date("l");

//time
// echo date("h/i/s a");

// paticular date
// echo date("d,j,D,l");


echo date("jS,F,Y")."<br>";
echo date("M d,Y")."<br>";
echo date("M jS,Y")."<br>";
echo date("jS \of M,Y")."<br>";
echo date("d-m-Y")."<br>";
echo date("d/m/Y")."<br>";

// creating your own time

// mktime(hour,min,seconds,month,day,year)
// echo(date("format",variable));

$res = mktime(10,30,20,20,5,2025);
echo(date("d-M-Y",$res));
?>