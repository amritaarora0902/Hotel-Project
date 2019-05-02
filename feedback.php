<!DOCTYPE html>
<html>
    <head>
    <title>Feedback | Hotel Management</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="img/logo.jpeg" type="img/icon" rel="icon">
        <script type="text/javascript" src="jquery/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btn').click(function(){
                    $('#nav').slideToggle();
                });
            });
        </script>
    </head>
    <body>
        <div id="full">
            <div style="background-image: url('img/f12.jpeg'); background-size:100% 680px; width:100%; height: 600px;">
           <div id="header">
                <div id="logo">
                    <h1><font color="white" style="font-family:algerian,Comic Sans MS; font-weight: bold; font-size:50px; padding-left:10px; word-spacing:3px; letter-spacing:2px;">The Sunrise</font></h1>
                    </div>
                <div><button id="btn">|||</button></div>
                <div id="nav" style=" font-size:20px; font-weight: bold;">
                    
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="bms.php">Book My Stay</a></li>
                        <li><a href="r1.php">Our Hotel</a></li>
                        <li><a href="feedback.php">Comment</a></li>
                    </ul>
                </div><br><br><br><br><br><br><br>
           
<form action="" method="post"><br><br><br><br>
    <label style="font-size:25px; color:white;"><b>Name:</b> <br><input type="text" name="name" style="box-sizing: border-box; border-radius: 10px; border: 2px solid black; padding: 12px 20px;"><br></label><br><br><br><br><br>
    <label style="font-size:25px; color:white;"><b>Message:</b> <br><textarea cols="45" rows="5" name="mes" style="box-sizing: border-box; border-radius: 10px; border: 2px solid black; padding: 20px 20px;"></textarea></label><br><br><br>

     <input type="submit" name="post" value="Post" style="font-size: 20px; text-align: center;">
    
</form>
               
                </div>
            </div>
        </div>
    </body>
</html>



<?php

$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];
if($post){

$write = fopen("com.txt", "a+");
fwrite($write, "<u><b> $name </b></u><br>$text<br>");
fclose($write);


$read = fopen("com.txt", "r+t");
echo "All comments:<br>";

while(!feof($read)){
	echo fread($read, 1024);

}

fclose($read);

}

else
{
	$read = fopen("com.txt", "r+t");
echo "All comments:<br>";

while(!feof($read)){
	echo fread($read, 1024);

}
fclose($read);


}





?>
    