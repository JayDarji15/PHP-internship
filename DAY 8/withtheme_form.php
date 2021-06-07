<?php

$connection = mysqli_connect("localhost","root","","form_withouttheme");

if($_POST){
    $id=$_POST['txt1'];
    $name=$_POST['txt2'];
    $gender=$_POST['txt3'];
    $dob=$_POST['txt4'];
    $email=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $password=$_POST['txt8'];
    $area=$_POST['txt9'];
    $bloodgrp=$_POST['txt10'];

    $q = mysqli_query($connection, "insert into st_user(st_id,st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgrp) values('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$bloodgrp}')") or die(mysqli_error($connection));

    if($q){
        echo"<script>alert('record added')</script>";
    }
    
    }


    ?>
<html>
<body>
<form method="post">
    Student ID: <input type="number" name="txt1"/><br>
    Name: <input type="text" name="txt2"/><br>
        Gender: <select name="txt3"><option>male</option><option>female</option></select><br>
    Date of Birth: <input type="date" name="txt4"/><br>
    Email: <input type="email" name="txt5"/><br>
    Mobile: <input type="number" name="txt6"/><br>
    Address: <input type="text" name="txt7"/><br>
    Password: <input type="password" name="txt8"/><br>
    Area: <input type="text" name="txt9"/><br>
    Blood Grp: <input type="text" name="txt10"/><br>
    <input type="submit"/>
</form>
</body>
</html>
<a href='table.php'>display record</a>