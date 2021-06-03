<?php

$connection = mysqli_connect("localhost","root","","form_withouttheme");
$id=$_GET['deleteid'];

$q= mysqli_query($connection, "delete from st_user where st_id='{$id}'") or die(mysqli_error($connection));

if($q)
{
    echo"<script>alert('record deleted');windows.location='table.php';</script>";
}