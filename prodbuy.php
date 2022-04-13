<?php
    include ("db.php"); //include db.php file to connect to DB
    $pagename="Product View"; //Create and populate a variable 

    echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
    echo "<title>".$pagename."</title>"; //display name of the page as window title
    echo "<body>";
        include ("headfile.html"); //include header layout file 

        //retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable
        //applied to the query string u_prod_id
        //store the value in a local variable called $prodid
        $prodid=$_GET['u_prod_id'];

        $SQL="select prodId, prodName, prodPicNameLarge, prodDescripLong , prodPrice,prodDescripShort, prodQuantity
        from Product

        where prodId =".$prodid;

        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

        //create an array of records (2 dimensional variable) called $arrayp.
        //populate it with the records retrieved by the SQL query previously executed. 
        //Iterate through the array i.e while the end of the array has not been reached, run through it
        $arrayp=mysqli_fetch_array($exeSQL);
            echo "<table style='border: 0px' id='baskettable2' class='center'>";
                echo "<tr>";
                    echo "<td style='border: 0px'>";
                        echo "<p><h5 style='color:#4a4a4a'>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
                        //display the small image whose name is contained in the array
                        echo "<img src=images/".$arrayp['prodPicNameLarge']." height=350 width=350>";  
                        //make the image into an anchor to prodbuy.php and pass the product id by URL (the id from the array)
                        echo "<br><p><b>".$arrayp['prodDescripShort']."</b></p>"; 
                        echo "<br><p><b>$".$arrayp['prodPrice']."</b></p>";
                        echo "<br><p>".$arrayp['prodDescripLong']."</p>"; 
                        echo "<input type=submit name='submitbtn' value='Purchase' id='submitbtn'
                        style='background-color: #736c68;border-color: #736c68;'>";
                        //pass the product id to the next page basket.php as a hidden value
                        echo "<input type=hidden name=h_prodid value=".$prodid.">";
                    echo "</td>";
                echo "</tr>";              
            echo "</table>";
    echo "</body>";
?>
