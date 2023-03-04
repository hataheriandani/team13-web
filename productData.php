<?php include "header1.php" ?>

<head>
  
    <link rel="stylesheet" href="orderstyle.css">
</head>

<div class="container">

<form method="POST" action="">


<div class="row1">

    <div class="col1">
        <h3 class="title">Menu Detail</h3>
        <div class="inputBox">
            <span> Menu</span>
            <input type="text" name="name" placeholder="Menu name">
        </div>

        <div class="inputBox">
            <span> Price</span>
            <input type="text" name="price" placeholder="0.00 ">
        </div>

        <div class="inputBox">
            <span> Availability</span>
            <select class="form-select" aria-label="Default select example" id="available" name="available">
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Lunch & Dinner">Lunch & Dinner</option>
                <option value="Breakfast/Lunch/Dinner">Breakfast/Lunch/Dinner</option>
                
            </select>
        </div>

        <div class="inputBox">
            <span> Image</span>
            <input type="file" name="image" placeholder="Select image">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

        
        
        
        
        
        <div class="inputBox"> 
        <input type="submit" value="submit" class="submit-btn" name="submit">
</div>
</div>
    </div>
    </div>
    </div>


    
        
        

    <?php 
    if (isset($_POST['submit'])){
        $mName = $_POST['name'];
        $price = $_POST['price'];
        $available = $_POST['available'];
        $image = $_POST['image'];
        $decs = $_POST['description'];
       
       include 'db.php';
      $sql = "INSERT INTO productInfo(product_Name, price, availality,image,description)
      VALUES('$mName','$price','$available','$image','$decs')";
      

      if ($conn ->query($sql)==TRUE){
        echo "Your information is added successfully";
    }

    else {
        echo "Error:".$conn -> error;
    }
        
    }
    ?>

<?php include "footer1.php" ?>