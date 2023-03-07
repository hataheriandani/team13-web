<?php include "header1.php" ?>

<head>
      <link rel="stylesheet" href="orderstyle.css">
</head>

<div class="container">

<form method="POST" action="" name="form1" id="form1" onsubmit="return formValidation()" >
<div class="row1">
    <div class="col1">
        <h3 class="title">Menu Detail</h3>
        <div class="inputBox">
            <span> Menu</span>
            <input type="text" name="name" id="name" placeholder="Menu name" >
        </div>

        <div class="inputBox">
            <span> Price</span>
            <input type="decimal" name="price" placeholder="0.00 ">
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
            <input type="URL" name="image" id="image"placeholder="Select image" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
            </div>
       
        <div class="inputBox"> 
        <input type="submit" value="submit" class="submit-btn" name="submit">
</div>
</div>
    </div>
    </div>
    </div>


    
<!--end of form validation-->

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
        echo "Successfully Registered!";
    }

    else {
        echo "Error:".$conn -> error;
    }
        
    }
    ?>

<!-- Validate the form data-->
<script type = "text/javascript">
function formValidation(){  

//validating name of menu
let Mname=document.form1.name.value;  
// to check if name is empty of not  
if (Mname==null || Mname==""){  
    alert("Name of the menu can't be blank");  
  return false;  
}

// to check if the price field is empty of not 
let pricechk=document.form1.price.value;  
 
if (pricechk==null || pricechk==""){  
    alert("Price can not be blank");  
  return false;  
}
 else if(isNaN(pricechk)){
    alert("Enter decimal value");  
  return false;
 }

 // to check if the URL field is empty of not
 let urlchk=document.form1.image.value;
    if (urlchk==null || urlchk==""){  
        alert("Compulsory field");  
        return false;  
      }
// to check if the Description field is empty of not
let descchk=document.form1.description.value;
    if (descchk==null || urdescchklchk==""){  
        alert("Compulsory field");  
        return false;  
      }
    }
  
</script>


<?php include "footer1.php" ?>