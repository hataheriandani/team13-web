<?php
$title="update information";
include "header.php";
$a = $_GET['id'];
include 'db1.php';
$result = mysqli_query($conn,"select * from paymentinfo where
id = '$a' ");
$row = mysqli_fetch_array($result);
?>

<h3>Make changes to your information, click update when done</h3>

<form method="POST" action="" onsubmit="return crud2test(),crud3test()" name=payform>


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

</form>
<input type="submit" value="submit" class="submit-btn" name="submit">
