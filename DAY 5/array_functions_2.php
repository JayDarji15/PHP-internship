<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?>
<?php
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
?>
<?php
$arr = array("a" => "JD", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
<?php
$a=array("JD","c","c++","java","php","android");
$b=array("JD","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
?>
<?php
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
<?php
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
<?php
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
?>
<?php
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
?>
<?php
$mystring = "PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
?>
<?php
$arr = array("php","language");
$mystring = implode(" ", $arr);
echo $mystring;
?>