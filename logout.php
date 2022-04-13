<?php
    session_start();
    $pagename="Logout"; //Create and populate a variable called $pagename
    echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
    echo "<title>".$pagename."</title>"; //display name of the page as window title
    echo "<body>";
        session_start();
        unset($_SESSION['l_email']);
        header("location:login.php");
    echo "</body>";
?>