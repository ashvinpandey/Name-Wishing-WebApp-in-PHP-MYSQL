<?php

    $dbhost = 'sql101.epizy.com';
    $dbuser = 'epiz_22580105';
    $dbpass = 'OPQaDTu6r3fZr4j';
    $dbname = 'epiz_22580105_event_wishes';

    $con=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) //connect to the database server
    or die ("Could not connect to mysql because ".mysqli_error());
    mysqli_query($con, "SET NAMES 'utf8'");
    mysqli_select_db($con,$dbname)  //select the database
    or die ("Could not select to mysql because ".mysqli_error());

?>
