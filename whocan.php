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



.che{
width:100%;
height:2200px;
margin:auto;
background-color:white;
}
.contain{
width:70%;
float:left;
height:2000px;
background-color:white;
}
ul.b{
list-style-type: square;
font-family:arial;
font-size:20px;
line-height:1.6;
}
ul.a{
list-style-type:none;
font-family:arial;
font-size:20px;
line-height:1.6;
margin: 0;
padding: 0;
}

.contain1{
width:20%;
height:360px;
float:right;
margin:4%;
background-color:white;
border:1px solid black;
}
.contain1 a{
float:center;
border:1px solid black;
margin:8px;
width:94%;
height:52px;
text-align:center;
text-decoration:none;
background-color:white;
color:black;
display:inline-block;
border-radius:2%;
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
.contain3{
width:20%;
height:400px;
float:right;
margin:4%;
background-color:white;
}
</style>
</head>

<body class="body">


<br>

<div class="che">
<div class="contain">
<p style="font-family:arial;color:#ec1c24; font-size:50px"><b>Who can give blood?</b></p>
<p style="font-family:arial;font-size:20px;line-height:1.6">Most people can give blood if they are in good health. 
There are some basic requirements one  need to fulfill in order to become a blood donor.Below are some basic eligibility guidelines:
(as per WHO)</p>

<p style="font-family:arial;color:green; font-size:30px;">Age
<p style="font-family:arial;font-size:20px;line-height:1.6">You are aged between 18 and 65.</p>
<ul class="b">
<li>In some countries national legislation permits 16–17 year-olds to donate provided 
that they fulfil the physical and hematological criteria required and that appropriate consent is obtained.</li>
<li>In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician.
The upper age limit in some countries are 60. </li>
</ul>

<p style="font-family:arial;color:green;font-size:30px;">Weight</p>
<p style="font-family:arial;font-size:20px;line-height:1.6">You weigh at least 50 kg.</p>
<ul class="b">
<li>In some countries, donors of whole blood donations should weigh at least 45 kg to donate 350 ml ± 10%.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Health</p>
<ul class="a">
<li>You must be in good health at the time you donate.</li>
<li>You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.</li>
<li>If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure. 
 If the body piercing was performed by a registered health professional and any inflammation has settled completely, you can donate blood after 12 hours.</li>
<li>If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.</li></ul>
<p style="font-family:arial;font-size:20px;line-height:1.6">You must not donate blood If you do not meet the minimum haemoglobin level for blood donation:</p>
<ul class="b">
<li>A test will be administered at the donation site. In many countries,
a haemoglobin level of not less than 12.0 g/dl for females and not less than 13.0 g/dl for males as the threshold.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Travel</p>
<p style="font-family:arial;font-size:20px;line-height:1.6">Travel to areas where mosquito-borne infections are endemic, e.g. malaria,
 dengue and Zika virus infections, may result in a temporary deferral.<br>
Many countries also implemented the policy to defer blood donors with a history of travel or residence for defined cumulative exposure periods in specified countries or areas,
as a measure to reduce the risk of transmitting variant Creutzfeldt-Jakob Disease (vCJD) by blood transfusion.</p>

<p style="font-family:arial;color:green;font-size:30px">Behaviours</p>
<p style="font-family:arial;font-size:20px;line-height:1.6">You must not give blood:</p>
<ul class="b">
<li>If you engaged in “at risk” sexual activity in the past 12 months</li>
<li>Individuals with behaviours below will be deferred permanently: </li>
<li>Have ever had a positive test for HIV (AIDS virus)</li>
<li>Have ever injected recreational drugs.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Pregnancy and breastfeeding</p>
<p style="font-family:arial;font-size:20px;line-height:1.6">Following pregnancy, the deferral period should last as many months as the duration of the pregnancy.
It is not advisable to donate blood while breast-feeding. Following childbirth, the deferral period is at least 9 months (as for pregnancy) 
and until 3 months after your baby is significantly weaned (i.e. getting most of his/her nutrition from solids or bottle feeding).</p>
</div>



