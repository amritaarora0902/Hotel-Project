<!DOCTYPE html>
<html>
    <head>
        <title>Book My Stay | Hotel Management</title>
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
            <div style="background-image: url('img/f11.jpeg'); background-size:100% 680px; width:100%; height: 600px;">
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
            <div id="banner"><br><br><br><br><br><br><br><br><br><br>
            <center>
             <div style="background:rgba(255,255,255,0.5); font-family:Comic Sans MS; font-weight: bold; font-size:20px; color:black; align:center;">
                 <table>
                     <tr>
                         <th width="20%" height="50px">Destination</th>
                         <th width="20%" height="50px">Check In Date</th>
                         <th width="20%" height="50px">Check Out Date</th>
                         <th width="20%" height="50px">Room</th>
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
                     </table>
            </div>
                </center>    
            </div>
            </div>
        </div>
    </body>
</html>