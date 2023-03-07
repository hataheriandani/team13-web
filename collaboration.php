<?php include "header1.php"?>
<?php include 'dbtaheri.php'?>

<head>
  
    <link rel="stylesheet" href="collaborationstyle.css">
</head>

<div class="container">

<form method="POST" action="">


<div class="row1">

    <div class="col1">
        <h3 class="title">Personal Information</h3>
        <div class="inputBox">
            <span> First Name :</span>
            <input type="text" name="fname" placeholder="Enter your first name">
        </div>

        <div class="inputBox">
            <span> Last Name :</span>
            <input type="text" name="lname" placeholder="Enter your last name">
        </div>

        <div class="inputBox">
            <span> Email:</span>
            <input type="text" name="email" placeholder="Enter your email">
        </div>

        <div class="inputBox">
            <span> Phone Number:</span>
            <input type="number" name="pnumber" placeholder="Enter your phone number">
        </div>
        
        <div class="flex">
            <div class="inputBox">
            <span> City:</span>
            <input type="text" name="city" placeholder="Enter your city">
        </div>
        <div class="inputBox">
            <span> Gender:</span>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="inputBox">
            <span> Section:</span>
            <select name="section" id="section">
                <option value="Cooking">Cooking</option>
                <option value="Marketing">Marketing</option>
                <option value="Delivery">Delivery</option>
                <option value="Services">Services</option>
            </select>
        </div>



    </div>

      

    </div>

    <div class="col1">
        <h3 class="title">Information Upload</h3>
        <div class="inputBox">
            <span>Upload your information:</span>
            <input type="file" name="resume" accept=".pdf,.doc,.docx">
        </div>

        <input type="submit" value="submit" class="submit-btn" name="submit">
    </div>
    </div>
    </div>
    </div>

    <?php 
    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $section = $_POST['section'];
       
      $sql = "INSERT INTO collaboration(fname,lname,email,pnumber,city,gender,section)
      VALUES('$fname','$lname','$email','$pnumber','$city','$gender','$section')";
      

      if ($conn ->query($sql)==TRUE){
        echo "Your application has been submitted successfully";
    }

    else {
        echo "Error:".$conn -> error;
    }
        
    }
    ?>

<?php include "footer1.php" ?>
