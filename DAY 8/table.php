<?php

$connetion = mysqli_connect("localhost","root","","form_withouttheme");
//qurry
$q = mysqli_query($connetion, "select * from st_user") or die(mysqli_error($connetion));
echo"<table border='1'>";
echo"<tr>";
echo"<th> Student ID </th>";
echo"<th> Name</th>";
echo"<th> Gender</th>";
echo"<th>Date of Birth</th>";
echo"<th> Email</th>";
echo"<th> Mobile</th>";
echo"<th> Address</th>";
echo"<th>Password</th>";
echo"<th>Area</th>";
echo"<th> Blood Grp</th>";
echo"<th> action</th>";
echo"</tr>";

while($row=mysqli_fetch_array($q))
{
    echo"<tr>";
    echo"<td>{$row['st_id']}</td>";
    echo"<td>{$row['st_name']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_dob']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_mobile']}</td>";
    echo"<td>{$row['st_address']}</td>";
    echo"<td>{$row['st_password']}</td>";
    echo"<td>{$row['st_area']}</td>";
    echo"<td>{$row['st_bloodgrp']}</td>";
    echo"<td><a href='edit.php?editid={$row['st_id']}'>edit</a> | <a href='delete.php?deleteid={$row['st_id']}'>delete</a></td>";
    echo"</tr>";
}
echo"</table>";

echo "<a href='withtheme_form.php'>Insert record</a>";
