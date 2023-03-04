<?php 
$title = "Feedback";
include "header1.php";

?>
<head>
  
  <link rel="stylesheet" href="orderstyle.css">
</head>

<h2> FEEL FREE TO GIVE US A FEEDBACK </h2>

<div class="container">
<form method = "POST" action=""  name="form1" >
<div class="row1">

    <div class="col1">
        <div class="inputBox">
            <span> First Name :</span>
            <input type="text" name="fname" placeholder="First name" required onblur="fname()">
        </div>

        <div class="inputBox">
            <span> Last Name :</span>
            <input type="text" name="lname" placeholder="Last name" required onblur="lname()">
        </div>

        <div class="inputBox">
            <span> Email:</span>
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div class="inputBox">
            <span> Feedback :</span>
            <textarea cols="50" rows="6" name="feedback" id="feedback" style="outline-style:1px ;" required></textarea>
        </div>
        
        <div class="flex">
            <div class="inputBox">
            <span> Date</span>
            <input type="date" name="date" required>
        </div>
     </div>
     <input type="submit" value="submit" class="submit-btn" name="Submit">
</div>
</div>

</form>


<?php

  if (isset($_POST['Submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $feedback = $_POST['feedback'];
        include "db.php";
        $sql = "INSERT INTO shehan_feedback (fname, lname, email, feedback, date)
        values('$fname', '$lname', '$email', '$feedback', '$date')";

        
        if($conn->query($sql)==TRUE){
            echo("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Your information is added successfully')
  </SCRIPT>");
            
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
