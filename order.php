<?php include "header1.php" ?>

<head>
  
    <link rel="stylesheet" href="orderstyle.css">
</head>

<div class="container">

<form method="POST" action="">


<div class="row1">

    <div class="col1">
        <h3 class="title">Billing Information</h3>
        <div class="inputBox">
            <span> First Name :</span>
            <input type="text" name="fname" placeholder="Raphael ">
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

      

    </div>

    <div class="col1">
        <h3 class="title">PAYMENT</h3>
        <div class="inputBox">
            <span>Accepted payment types:</span>
            <img src="credit-card-types_orig.jpg" alt="card and pr payment types">
        </div>

        <div class="inputBox">
            <span> Name as on card:</span>
            <input type="text" name="name" placeholder="Raphael Amabo">
        </div>

        <div class="inputBox">
            <span> card number :</span>
            <input type="number" name="number" placeholder="123-444-555-444">
        </div>

        <div class="inputBox">
            <span>expiry month and year :</span>
            <input type="number" placeholder="03/26">
        </div>

        <!--<div class="inputBox">
            <span>order numbers:</span>
            <input type="number" placeholder="1,2,3..">
        </div>
             -->
        
        <div class="inputBox">
            <span> CVV :</span>
            <input type="text" placeholder="1233">

            <div class="inputBox">
            <span> menu :</span>
            <select name="meal name" id="menu">
                <option value="fried rice">fried rice</option>
                <option value="hot dogs">hot dogs</option>
                <option value="hot chocolates">hot chocolates</option>
                <option value="fried eggs">fried eggs</option>
                <option value="tomato soup">tomato soup</option>
                <option value="mashed potatoes">mashed potatoes</option>
                <option value="veg salad">veg salad</option>
                <option value="pancakes">pancakes</option>
                <option value="coffee">coffee</option>
                <option value="ice cream">ice cream</option>
                <option value="hamburgers">hamburgers</option>
                <option value="steaks and chips">steaks and chips</option>
                <option value="crispy chicken">crispy chicken</option>
                <option value="achu">achu</option>
            </select>
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
        $address = $_POST['address'];
        $name = $_POST['name'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $number = $_POST['number'];
        //$customerid = $_POST['orderid'];
       include 'db1.php';
      $sql = "INSERT INTO paymentinfo(fname,lname,email,address,name,state,zip,number)
      VALUES('$fname','$lname','$email','$address','$name','$state','$zip','$number')";
      

      if ($conn ->query($sql)==TRUE){
        echo "Your information is added successfully";
    }

    else {
        echo "Error:".$conn -> error;
    }
        
    }
    ?>

<?php include "footer1.php" ?>