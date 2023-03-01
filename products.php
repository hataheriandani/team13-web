<?php
include "header1.php"; 
include("db.php");

$sql="SELECT * FROM productInfo";
$result=$conn->query($sql);
if($result->num_rows>0){
echo "
<div class='container'>
<div class='row'>
<div class='col-md-8'>
 <form method='POST'>
 <table class='table table-striped table-dark' style=height:500px;>";
 echo "<thead>
 <tr align='center'>
   <th scope='col' colspan='3' >Product Name</th>
   
 </tr>
</thead>";
 
 while($row=$result->fetch_assoc()){
   
    echo "
  <tbody>
    <tr>
      
      <td colspan='3'><a href='display.php?id=$row[product_Name]'>$row[product_Name]</a></td>
          
    </tr>
   
  </tbody>";}
echo "</table>";
}

else {
  echo "no data";
}
echo "</div>
<div class='col-md-4' style='vertical-align:middle;'>
<img src='images/lunch.jpg' alt='image' height='400px' >
</div>
</div>
</div>";
?>

<section name="display">
  


</section>
          <style>
 body {

background-color: #222629;
font-family:Arial, Helvetica, sans-serif;
font-size: large;
width: 1080px;
width: 90%;
margin:auto;
justify-content: space-between;
color: #ffde00;
}          

h2{
font-family: Edwardian Script ITC;
font-size: 65px;
text-align: left;
margin:150px 30px 25px 10px;
text-shadow: (5px 5px 5px #141516);
filter: drop-shadow(5px 5px 5px #141516);
}

.row2{
    margin-top: 40px;
display: flex;
color: white;
}

img {
width: fit-content;
}

.left {
display: flex;
text-align: left;
width: 210px;
margin: 100px 0 0 90px;
}

.center {
text-align: center;
}

.right {
text-align: right;
width: 250px;
margin: 100px 0px 0 50px;
}
.price,.price1, .price2,.price3,.price4,.price5,.price6 {
color: #ffde00;

}
.price{
margin: 27px 140px 0 0px;
}
.price1{
margin: 0px 210px 0 10px;
}
.price2{
margin: 54px 190px 0 3px;
}
.price3{
margin: 27px 199px 0 0px;
}
.price4, .price5,.price6{
margin: 0px 0px 0 15px;
}
.matn,.matn1,.matn2,.matn3,.matn4,.matn5,.matn6{
display: flex;
margin-left: 1px;
margin-bottom: 15px;
}
.matn1{
display: flex;
}

</style>        

<?php
include "footer1.php" ?>