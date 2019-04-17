<!DOCTYPE html>
<html>
    <head>
        <title>Home | Hotel Management</title>
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
            <div style="background-image: url('img/f1.jpeg'); background-size:100%; width:100%; height: 600px;background-repeat: no;">
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
            
            </div>
             <div id="f1" style="background:#002db3; font-family:Comic Sans MS; font-weight: bold; font-size:20px; color:white;">
                 <form action="" method="post"></form>
                 <center><table>
                     <tr>
                         <th width="20%" height="50px" style="font-color: white;">Destination</th>
                         <th width="20%" height="50px" style="font-color: white;">Check In Date</th>
                         <th width="20%" height="50px" style="font-color: white;">Check Out Date</th>
                         <th width="20%" height="50px" style="font-color: white;">Room</th>
                         <td rowspan="2"><input type="submit" value="Check" name="sub"</td>
                     </tr>
                     <tr>
                         <td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
                         <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                         <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                         <td width="20%" height="50px">
                         <center><select>
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                             <option>4</option>
                             <option>5</option>
                             </select></center>
                         </td>
                     </tr>
                     </table></center>
                 </form>
            </div>
            <div id="welcome">
                <h1 align="center" style="color:#cca300; font-family:Comic Sans MS; font-size:35px; font-variant:small-caps; text-decoration:underline;">Welcome To The Sunrise</h1>
                <center><font size="4">
                    <div id="para" style="font-size:22px;">
                    Welcome to <b><i>THE SUNRISE</i></b> an elegance residence!<br>On entering our gates you will immediately feel the warmth &amp;<br> care of a family run place as you are personally received by us.<br>The Hotel has earned its status as a luxury hotel by consistently delivering friendly service<br> &amp; modern facilities.<br></div>
                    </font>
                    <h2 style="color:#cca300; font-family:Comic Sans MS; font-size:30px; font-variant:small-caps;">Glimpse</h2>
                </center>
            </div>
            <div id="g1">
                <div id="one"><img src="img/f3.jpeg" width="100%">
                    <center>
                        <h2 style="font-family:algerian; color:#990000;">THE SASSY SPOON</h2><br>
                        <p style="font-size:18px;">
                            For a memorable meal the quality of the service<br> is something that guest often remember.<br><br><b>HAVE A TASTY MEAL HERE!</b></p>           
                    </center>
                </div>
                <div id="two"><img src="img/f4.jpeg" width="100%">
                    <center>
                        <h2 style="font-family:algerian; color:#990000;">BLUE HEAVEN</h2><br>
                        <p style="font-size:18px;">
                            Blue Heaven is a pool where the guest<br> can enjoy with their family &amp; friends.<br><br><b>SO JOIN US FOR THE PARTY!</b></p>
                         
                    
                    </center>
                </div>
                <div id="three"><img src="img/f5.jpeg" width="100%">
                    <center>
                        <h2 style="font-family:algerian; color:#990000;">ROOMS</h2><br>
                        <p style="font-size:18px;">
                            We give our best services and facilities.<br>We follow the rule <br><br><b>"CLEANLINESS LEADS TO GODLINESS".</b></p>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>