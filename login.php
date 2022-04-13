<?php
$pagename="Login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
    echo "<body>";
        include ("headfile1.html"); //include header layout file
        
        //create a HTML form to capture the user's email and pwd
            echo "<form action=index.php method=post>";
                echo "<table id='baskettable1' class='center'>";
                    echo "<tr>";
                    echo "<td>";
                        echo "<h2 style=' text-align: center; color:  #4700D8'><b>Login</b></h2>"; 
                    echo "</td>";
                        // echo "<td id='loginStyle'><b>Login</b></td>"; //display name of the page on the web page
                    echo "</tr>";
                    //create text field called l_email to capture user’s input for the email
                    echo "<tr>";
                        echo "<td>Email</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><input type=text name=l_email size=40 required></td>";
                    echo "</tr>";
                    //create text field called l_password to capture user’s input for the password
                    echo "<tr>";
                        echo "<td>Password</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><input type=password name=l_password size=40 required></td>";
                    echo "</tr>";
                    echo "<tr>";  
                        echo "<td>";                      
                            echo '<a href="">Forgot Password?</a>';
                        echo "</td>";
                    echo "</tr>";
                    //create a login button
                    echo "<tr>";
                        echo "<td style='text-align: center; color:#4700D8'><input type=submit value='Login' id='submitbtn'></td>";
                    echo "</tr>";
                echo "</table>";
            echo "</form>";
    echo "</body>";
?>