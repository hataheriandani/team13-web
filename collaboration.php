<?php
$title = "Collaboration";
include "header1.php";?>

<form action="" method="post" onsubmit="return crud()" name="form1">
    <input type ="text" name ="fname" placeholder="First Name" required onblur="form1"> <br><br>
    <input type ="text" name ="lname" placeholder="Last Name" required><br><br>
    <input type ="text" name ="city" placeholder="City" required><br><br>
    <input type ="text" name ="email" placeholder="Email Adrress" required><br><br>
    <input type ="num" name ="pnumber" placeholder="Phone Number" required><br><br>
    <select name="groupid">
        <option value="Group1">Advertising</option>
        <option value="Group2">Sale</option>
        <option value="Group3">Cooking </option>
    </select><br><br>

    <input type ="submit" value ="Submit" name="submit" >

</form>

<?php
        if(isset($_POST['submit'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $city=$_POST['city'];
            $email=$_POST['email'];
            $pnumber=$_POST['pnumber'];
            $groupid=$_POST['groupid'];

            include 'db.php';
            $sql="insert into studentInfu(fname,lname,city,groupid)
            values('$fname','$lname','$city','$email','$pnumber', '$groupid')";
            
            if($conn->query($sql)===TRUE){
                
                echo"Your information is added successfully";

            }
            else{

                echo"Error:" .$conn->error;

            }
        }
?>


<?php ?>

<?php include "footer1.php" ?>