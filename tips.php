<?php 
session_start();
require 'file/connection.php';
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
		<style>
		.body{
background-color:white;
}

.header{
background-color:white;
width:100%;
height:130px;
}
.header1{
background-color: #008dc9;
width:100%;
height:48px;
}
.top{
font-size:22px;
float:left;
font-family:arial;
border:2px solid #008dc9;
padding:9px 40px;
margin-top:0px;
margin-left:30px;
text-decoration:none;
background-color:#008dc9;
color:white;
display: inline-block;
}
.top:hover{
background-color:#e65c00;
color:white;
}

.imag{
width:100%;
height:300px;
background-color:white;
display:flex;

}
.img{
border:none;
align-items:center; 
justify-content:center;
background-size:auto;
height:auto;
width:20%;
text-align:center;
text-decoration:none;
background-color:white;
color:black;
display:inline-block;
}

.contain{
width:60%;
margin-left:50px;
height:900px;
background-color:white;
}

ul.b{
list-style-type: square;
font-family:arial;
font-size:20px;
line-height:1.6;
}
.contain1 a:hover{
background-color:#008dc9;
color:white;
}
.c{
background-color:#008dc9;
color:white;
border:1px solid black;
width:100%;
height:52px;
}

.contain2{
width:20%;
height:600px;
float:right;
margin:4%;
background-color:white;
}
</style>
</head>


<div class="contain">
<p style="font-family:arial;color:#ec1c24; font-size:50px"><b>Tips on Blood Donation</b></p>

<p style="font-family:arial;color:green;font-size:30px">Before Your Donation</p>
<ul class="b">
<li>Make an Appointment-
Select a donation type and find a convenient time that works best for you.</li>
<li>Get the Dish on Nutrition
Have iron-rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals or raisins.</li>
<li>Be Well Rested and Hydrate
Get a good night's sleep the night before your donation, eat healthy foods and drink extra liquids.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px"> On the Day of Your Donation</p>
<ul class= "b">
<li>Photo ID-
Please bring your donor card, driver's license or two other forms of identification.</li>
<li>Medication List
We'll need to know about all prescription and over-the-counter medications you're taking.</li>
<li>Eat a healthy meal, avoiding fatty foods like hamburgers, fries or ice cream.</li>
<li>Wear a shirt with sleeves that you can roll up above your elbows.</li>
<li>Drink an extra 16 oz. of water (or other nonalcoholic drink) before your appointment.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">After Your Donation</p>
<ul class="b">
<li>Enjoy a Snack-
Relax for a few minutes in our refreshment & recovery area — have some cookies or other snacks — you’ve earned it!</li>
<li>Tell Others About Your Good Deed
The gratification of giving blood is a feeling you'll want to share.</li>
<li>Drink Extra Liquids
Drink an extra four (8 oz.) glasses of liquids and avoid alcohol over the next 24 hours.</li>
</ul>
</div>


</div>

</body>
</html>
