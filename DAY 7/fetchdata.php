<?php

$connetion = mysqli_connect("localhost","root","","form_withouttheme");
//qurry
$q = mysqli_query($connetion, "select * from st_user") or die(mysqli_error($connetion));
//below function array fatch data
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//FATCH D ATA FROM ARRAY
$row = mysqli_fetch_array($q);

print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9];
//echo $row['st_id'].$row['st_name'].$row['st_gender'].$row['st_mobile'];
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row); 
echo $row['st_id'].$row['st_name'].$row['st_gender'].$row['st_dob'].$row['st_email'].$row['st_mobile'].$row['st_address'].$row['st_password'].$row['st_area'].$row['st_bloodgrp'];
?>