<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>
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

.maincont{
width:100%;
height:400px;
background color:lightpink;
margin:auto;
}
.cont1{
width:20%;
float:right;
height:360px;
background-color:pink;
border:1px solid black;
}
.cont1 a{
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
.cont1 a:hover{
background-color:#008dc9;
color:white;
}
.c{
background-color:#008dc9;
color:white;
border:1px solid black;
width:300px;
height:52px;
}



.footer{
display: flex;
background-color:#008dc9;
align-items:center; 
justify-content:center;
width:100%;
height:250px;
}
.footerbox{
width:20%;
height:200px;
margin:20px;
border-radius:2px;
background-color:#008dc9;
display:inline-block;
}

.fa{
padding:10px;
font-size: 30px;
width: 15px;
text-align: center;
text-decoration: none;
margin: 5px 2px;
}

.fa:hover {
opacity: 0.7;
}
.fa-facebook {
background:#008dc9;
color: white;
}

.fa-twitter {
background:#008dc9;
color: white;
}

.fa-google {
background:#008dc9;
color: white;
}
.fa-youtube {
background:#008dc9;
color: white;
}



</style>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>
   <body class="body">


</h1>
</div>
<br>
<div class="imag">
<img src="2.jpeg" alt="main" class="img">
<img src="1.jpeg" alt="main2" class="img">
<img src="fs.jpeg" alt="main3" class="img">
<img src="gs.jpeg" alt="main4" class="img">
<img src="2.jpeg" alt="main" class="img">
</div>
<br><br>
<div class="maincont">
<div class="cont1">
<div class="c">
<p style="font-size:20px ;font-family:arial;text-align:center;"><b>Learn!</b></p></div><br>

<a href="types.php">
<p style="font-size:20px;font-family:arial;text-align:center">Types of Blood Groups</p></a>

<a href="use.php">
<p style="font-size:20px ;font-family:arial;text-align:center">Uses of Donating Blood</p></a>

<a href="whocan.php">
<p style="font-size:20px ;font-family:arial;text-align:center">Who can Donate Blood?</p></a>

<a href="tips.php">
<p style="font-size:20px ;font-family:arial;text-align:center" >Tips for Blood Donation</p></a>
</div>
</div>


<div class="footer">
<div class="footerbox">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<br>
</div>
</div>

        

</body>
</html>