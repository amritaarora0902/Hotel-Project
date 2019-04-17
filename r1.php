<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Our Hotel | Hotel Management</title>
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
           <div style="background-image: url('img/f9.jpeg'); background-size:100%; width:100%; height:600px; background-position:center;">
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
                </div>
            </div>
            <div id="banner">
                <div id="form">
                    <form action="r1.php" method="post">
                <table style="color:white;">
                    <tr>
                        <td style="font-size:20px;">Status</td>
                        <td style="padding-left:20px;"><input type="text" name="Status" placeholder="Status" title="Status"></td>
                    </tr>
                    <tr>
                        <td style="font-size:20px;">Name</td>
                        <td style="padding-left:20px;"><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
                        <td>ID no.</td>
                        <td style="padding-left:20px;"><input type="text" name="idno" placeholder="Enter ID" title="ID"></td>
                    </tr>
                    <tr>
                        <td style="font-size:20px;">Address</td>
                        <td style="padding-left:20px;"><input type="text" name="address" placeholder="Enter Address" title="Address"></td>
                    </tr>
                    <tr>
                        <td style="font-size:20px;">City</td>
                        <td style="padding-left:20px;"><select name="city">
                            <option>--Select--</option>
                            <option>Mumbai</option>
                            <option>Delhi</option>
                            <option>Bengaluru</option>
                            </select></td>
                    
                    
                        <td style="font-size:20px;">District</td>
                        <td style="padding-left:20px;"><select name="dis">
                            <option>--Select--</option>
                            <option>Mumbai</option>
                            <option>Delhi</option>
                            <option>Bengaluru</option>
                            </select></td>
                
                    
                        <td style="font-size:20px;">State</td>
                        <td style="padding-left:20px;"><select name="state">
                            <option>--Select--</option>
                            <option>Maharastra</option>
                            <option>Delhi</option>
                            <option>Andhra Pradesh</option>
                            </select></td>
                    </tr>
                     <tr>
                        <td style="font-size:20px;">Enter E-mail</td>
                        <td style="padding-left:20px;"><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
                    </tr>
                     <tr>
                        <td style="font-size:20px;">Checkin date</td>
                        <td style="padding-left:20px;"><input type="text" name="coin" placeholder=" Check In" title="Check In "></td>
                    </tr>
                     <tr>
                        <td style="font-size:20px;">Check out</td>
                        <td style="padding-left:20px;"><input type="text" name="coout" placeholder=" Check Out" title="Check Out"></td> </tr>
                         <tr>
                          <td style="font-size:20px;"> Enter Members</td>
                        <td style="padding-left:20px;"><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
                                            </tr>
                    <tr>
                         <td style="font-size:20px;"><input style="width:100px; height=30px; border-radius: 20px; opacity:0.7;"  type="submit" name="submit" value="submit"></td>
                    </tr>
                    </table>
                    </form>
                <?php
                
                if(isset($_POST['submit']))
                {
                     $name=$_POST['name'];
                     $city=$_POST['city'];
                     $dis=$_POST['dis'];
                    $idno=$_POST['idno'];
                    $state=$_POST['state'];
                     $email=$_POST['email'];
                     $coin=$_POST['coin'];
                     $coout=$_POST['coout'];
                     $m=$_POST['members'];
                    
                    if(mysqli_query($a,"insert into form(id,name,city,dis,email,state,cidate,codate,m) value('$idno','$name','$city','$dis','$email','$state','$coin','$coout','$m')")){}
                    
                }
                ?>
                </div>
                </div>
            </div>
        </body>
</html>
    