<?php
// echo date("dS"); 


//Suffix for day of the month
//+++++++++
// S

//day of the month=d,j,D,l  
//++++++++++++++++++++++++++
 // d=decimal with leading zero, j=decimal without leading zero
// D=first three letters, l=all letters

// echo(date("l"));


//Day of the week
//+++++++++++++++
// A day of the week in numeric format, 0 for Sunday, 1 for Monday,and so on
//N,w,
// echo(date("N"));

// week of the year
//+++++++++++++++++++
// W
// echo(date("W"));

//day of the year
//++++++++++++++++++
// z
// echo(date("z"));
//month
//+++++++++
//F,M,m,N

// echo(date("N"));

//Time
//+++++++++
// h:i:s A  = hour:min:sec AM/PM
// echo date("H:i:s");
// echo date("h:i:s A");


//Year
//++++++
//Y,y

//check if the year is a leap yar or not
//+++++++++++++++++++++++++++++++++++++++
// L

//number of days in a given month
//++++++++++++++++++++++++++++++++++
// t

//checks the time
//+++++++++++++++++++++
//echo (time());



// echo(date("t"));



// echo(date("dS  \of , F Y"))


echo(date("Y-m-d",$res));
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




