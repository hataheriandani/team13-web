<?php include "header1.php" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orderstyle.css">
</head>

<div class="container">

<form action="">


<div class="row1">

    <div class="col1">
        <h3 class="title">Billing Information</h3>
        <div class="inputBox">
            <span> full Name :</span>
            <input type="text" placeholder="Amabo Raphael ">
        </div>

        <div class="inputBox">
            <span> email:</span>
            <input type="text" placeholder="example@email.com">
        </div>

        <div class="inputBox">
            <span> Address :</span>
            <input type="text" placeholder="street-street number-building number- door number ">
        </div>

        <div class="inputBox">
            <span> City :</span>
            <input type="text" placeholder="Hameenlinna">
        </div>

        
        <div class="flex">
            <div class="inputBox">
            <span> state:</span>
            <input type="text" placeholder="Amabo Raphael ">
        </div>
        <div class="inputBox">
            <span> zip code :</span>
            <input type="text" placeholder="123 333">
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
            <input type="text" placeholder="Raphael Amabo">
        </div>

        <div class="inputBox">
            <span> card number :</span>
            <input type="number" placeholder="123-444-555-444">
        </div>

        <div class="inputBox">
            <span>expiry month and year :</span>
            <input type="number" placeholder="03/26">
        </div>

        
        <div class="inputBox">
            <span> CVV :</span>
            <input type="text" placeholder="1233">
        
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </div>
    </div>
    </div>
    </div>

<?php include "footer1.php" ?>