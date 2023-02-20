<?php include "header1.php" ?>

  <body>

  <div class="wrapper">
  <div class="container">

<h2>There is always something for everyone.</h2>
      </div>

      <div class="row2">
        <div class="col-md-8">
          <p>Bon Appétit is located in the historic premises of the Swedish Theater in Helsinki. Here we serve, among other things, classic dishes such as Biff Rydberg, a classic Skagen, Skaldjursplatå and other delicacies. We invest in high-quality service, good drinks and good ingredients. We also manage the intermission service at the Swedish Theatre, which you can book in advance.</p>         
          <p>At Bon Appétit we serve grilled premium hamburgers and kebabs with good accessories and top quality ingredients. We invest in small-scale preparation and cooking, freshly baked bread and the house's own dressings.</p>
        </div>
      </div>

      <div class="row3">
        <a class="card1" href="break1.php">
          <img src="images/breakfast.jpg" alt="breakfast menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>BREAKFAST</b></h4>
          </div>
        </a>

        <a class="card2" href="lunch1.php">
          <img src="images/lunch.jpg" alt="lunch menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>LUNCH</b></h4>
          </div>
        </a>

        <a class="card3" href="dinner1.php">
          <img src="images/dinner.jpg" alt="dinner menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>DINNER</b></h4>
          </div>
        </a>

 
<style>
 body {
    background-color: #222629;
    background-image: url(images/background.png);
    background-position: right;
    background-position-y: 100px;
    background-repeat: no-repeat;

    font-family: 'Encode Sans', sans-serif;
    font-size: 20px;
    width: 1280px;
    margin:auto;
    display: flex;
    justify-content: space-between;
    color: #ffde00;
}

.left {
    text-align: left;
}

.row2 {
    width: 1000px;

}

.row3 a:link { /*Breakfast, lunch, Dinner font color */
    color:#ffde00;
    text-decoration: none;
}

a:link { /*Tel number color */
    color:#222629;
}

.row3 {
    display: flex;
    justify-content: space-between;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 30px;
}
.card1 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}
.card2 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}
.card3 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}

.card1 :hover{
    transform: scale(1.1);
}
.card2 :hover{
    transform: scale(1.1);
}
.card3 :hover{
    transform: scale(1.1);
}

.home :hover {
    transform: scale(1.1);
}


.footer-box{
    display: flex;
    background-color: #ffde00;
    justify-content: space-between;
    color: #222629;
    align-items: center;
    justify-content: space-around;
    font-size: x-large;

}


@media (max-width: 1080px) {

body {
    display: block;
    height : auto;
    width: 50%;
    width: fit-content;
    margin: 5%;
    background-image: none;
}

.logo {
    width: 50%;
    width: fit-content;
}

.wrapper {
    display: block;
    width : 50%;
}

h1 {
    font-size:xx-large;
}

h2 {
    text-align: center;
}



}
</style>
<?php include "footer1.php" ?>