
<link rel="stylesheet" href="updatedata.css">
<?php
$title="update information";
include "header1.php";
$a = $_GET['id'];
include 'db1.php';
$result = mysqli_query($conn,"select * from paymentinfo 
where id = '$a' ");
$row = mysqli_fetch_array($result);
?>

<h3>Make changes to your information, click update when done</h3>

<form name ="update" method="post" action="" onsubmit="return crud2test(),crud3test()" name=payform>


<div class="row1">

    <div class="col1">
        <h3 class="title">Billing Information</h3>
        <div class="inputBox">
            <span> First Name :</span>
            <input type="text" name="fname" placeholder="Raphael " required>
        </div>

        <div class="inputBox">
            <span> Last Name :</span>
            <input type="text" name="lname" placeholder="Amabo">
        </div>

        <div class="inputBox">
            <span> email:</span>
            <input type="text" name="email" placeholder="example@email.com">
        </div>

        <div class="inputBox">
            <span> home address :</span>
            <input type="text" name="address" placeholder="street-street number-building number- door number ">
        </div>
        
        <div class="flex">
            <div class="inputBox">
            <span> state/city:</span>
            <input type="text" name="state" placeholder="Hameenlinna ">
        </div>
        <div class="inputBox">
            <span> zip code :</span>
            <input type="text" name="zip" placeholder="123 333">
        </div>

        <div class="inputBox">
            <span> contact number:</span>
            <input type="number" name="phone" placeholder="0443 334 5566">
        </div>



    </div>
    <input type="submit" value="submit" class="submit-btn" name="submit">

    </form>  


<?php
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$query = mysqli_query($conn, "UPDATE paymentinfo set fname='$fname', lname='$lname' where id='$a' ");

}
else {echo "Record not modified";}
?>
 <p>but</p>
<?php
if (isset($_POST['delete'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = mysqli_query($conn, "DELETE FROM paymentinfo where id='$a' ");
    echo "record deleted successfully";
}
    else {echo "Record not modified";}

?>
<?php 
include 'footer1.php';
?>

