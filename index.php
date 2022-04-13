<?php
    include ("db.php"); //include db.php file to connect to DB
    $pagename="View Product"; //create and populate variable called $pagename
    echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
    echo "<title>".$pagename."</title>";

    echo "<body>";
        include ("headfile.html");

        //create a $SQL variable and populate it with a SQL statement that retrieves product details
        $SQL="select prodId, prodName, prodPicNameSmall, prodDescripShort , prodPrice  from Product";
        //run SQL query for connected DB or exit and display error message
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

        echo "<table style='border: 0px'>";
      
            //populate it with the records retrieved by the SQL query previously executed. 
            while ($arrayp=mysqli_fetch_array($exeSQL)){
                echo "<td>";
                    echo "<td style='border: 0px'>";
                        echo "<p><h5 style='color:#4a4a4a'>".$arrayp['prodName']."</h5>"; 
                        echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
                        echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
                            echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200>";
                        echo "</a>";
                        echo "<p style='margin-left: 15px'>".$arrayp['prodDescripShort']."</p>"; 
                        echo "<p style='margin-left: 15px'><b>$".$arrayp['prodPrice']."</b></p><br>";
                        echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
                            echo "<input type=submit name='submitbtn' value='View Product' id='submitbtn' 
                            style='background-color: #736c68;border-color: #736c68;'>";
                        echo "</a>";
                    echo "</td>";
                echo "</td>";
            }
        echo "</table>";
    echo "</body>";
?>