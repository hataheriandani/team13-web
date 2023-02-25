<?php 
$title = "Feedback";
include "header1.php" ?>

<h2> FEEL FREE TO GIVE US A FEEDBACK </h2>

<form1 method = "post" action="" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="First Name" required onblur="fname()"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required onblur="lname()"> <br><br>
    <input type="text" name="email" placeholder="Email" required> <br><br>
    <input type="date" name="date" class="form-control" required> <br>
    <input type="text" name="feedback" placeholder="Feedback" required > <br><br>
    <input type="submit" value="Submit" name="submit"> <br><br>

</form1>

<?php

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $feedback = $_POST['feedback'];
        include 'db.php';
        $sql = "insert into shehan_feedback (fname, lname, email, date, feedback)
        values('$fname', '$lname', '$email', '$date', '$feedback',)";

        if ($conn ->query($sql) === TRUE){
            echo "Your information is added successfully";
        }
        else {
            echo "Error:" . $conn->error;
        }
    }
?>


<?php include "footer1.php" ?>




<style>

h2{
    font-family: 'Courier New', Courier, monospace;
    color: #ffde00;
    text-align: center;
    padding-top: 30px;
}

</style>
