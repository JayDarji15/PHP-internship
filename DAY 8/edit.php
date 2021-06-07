

<?php

$connection = mysqli_connect("localhost","root","","form_withouttheme");
$id=$_GET['editid'];



$editq= mysqli_query($connection, "select * from st_user where st_id='{$id}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST){
    $txt1=$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
    $txt4=$_POST['txt4'];
    $txt5=$_POST['txt5'];
    $txt6=$_POST['txt6'];
    $txt7=$_POST['txt7'];
    $txt8=$_POST['txt8'];
    $txt9=$_POST['txt9'];
    $txt10=$_POST['txt10'];
    $uq= mysqli_query($connection, "UPDATE st_user SET st_id='{$txt1}',st_name='{$txt2}',st_gender='{$txt3}',st_dob='{$txt4}',st_email='{$txt5}',st_mobile='{$txt6}',st_address='{$txt7}',st_password='{$txt8}',st_area='{$txt9}',st_bloodgrp='{$txt10}' where st_id='{$id}'") or die(mysqli_error($connection));
      
    
    if($uq){
        echo "<script>alert('upadated successfully');window.location='table.php';</script>";
    }
    }
?>
<html>
<body>
        <form method="post">
            Student ID: <input type="number" value="<?php echo $editdata['st_id']; ?>" name="txt1"/><br>
    Name: <input type="text" value="<?php echo $editdata['st_name']; ?>" name="txt2"/><br>
        Gender: <select name="txt3" value="<?php echo $editdata['st_gender']; ?>"><option>male</option><option>female</option></select><br>
    Date of Birth: <input type="date" value="<?php echo $editdata['st_dob']; ?>" name="txt4"/><br>
    Email: <input type="email" value="<?php echo $editdata['st_email']; ?>" name="txt5"/><br>
    Mobile: <input type="number" value="<?php echo $editdata['st_mobile']; ?>" name="txt6"/><br>
    Address: <input type="text" value="<?php echo $editdata['st_address']; ?>" name="txt7"/><br>
    Password: <input type="password" value="<?php echo $editdata['st_password']; ?>" name="txt8"/><br>
    Area: <input type="text" name="txt9"value="<?php echo $editdata['st_area']; ?>" /><br>
    Blood Grp: <input type="text" name="txt10" value="<?php echo $editdata['st_bloodgrp']; ?>" /><br>
    <input type="submit"/>
        </form>
</body>
</html>
