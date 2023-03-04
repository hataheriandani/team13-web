<?php include "header1.php" ?>

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
            <input type="number" name="phone" placeholder="Enter your phone number">
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
                <option value="IT">Cooking</option>
                <option value="Marketing">Marketing</option>
                <option value="Finance">Finance</option>
                <option value="Human Resources">Human Resources</option>
            </select>
        </div>



    </div>

      

    </div>

    <div class="col1">
        <h3 class="title">Resume Upload</h3>
        <div class="inputBox">
            <span>Upload your resume:</span>
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
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $section = $_POST['section'];
       include 'db.php';
      $sql = "INSERT INTO job_application(fname,lname,email,phone,city,gender,section)
      VALUES('$fname','$lname','$email','$phone','$city','$gender','$section')";
      

      if ($conn ->query($sql)==TRUE){
        echo "Your application has been submitted successfully";
    }

    else {
        echo "Error:".$conn -> error;
    }
        
    }
    ?>

<?php include "footer1.php" ?>
