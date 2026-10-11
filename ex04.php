<?php
//Q1
$a = 42;       
$b = "42";     
$c = 15.8;     
$d = true;    
$e = false;    
$f = null;
echo "<pre>";

//Q2
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
echo "</pre>";
echo "<pre>";

//Q3
$b_int = (int) $b;      
$c_int = (int) $c;      
$a_str = (string) $a;   

var_dump($b_int); 
var_dump($c_int); 
var_dump($a_str);  

//Q4
echo true; 
echo "<br>";
echo false;
echo "<br>";
var_dump(true);  
var_dump(false); 
echo "<br>";

//Q5
var_dump((bool) 0);     
var_dump((bool) "0");  
var_dump((bool) "PHP");  
var_dump((bool) []);     
?>