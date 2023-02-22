<?php

use phpDocumentor\Reflection\Location;

    $name = $_POST['name'];
    $date_of_birth = $_POST['dob'];
    $address = $_POST['address'];
    $parent_name = $_POST['parent-name'];
    $number = $_POST['number'];

    //Database connection
    $conn = new mysqli('localhost','root','','student'); //replace student with dbname
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("connection Failed : ". $conn->connect_error);
    } else{
        $smtp = $conn->prepare("insert into registration(name, date_of_birth, address, parent_name, number) values(?, ?, ?, ?, ?)");
        $smtp->bind_param("ssssi", $name, $date_of_birth, $address, $parent_name, $number); // s for string and i for intiger
        $execval = $smtp->execute();
        echo $execval;
        echo "<h3>Registration successfully...</h3>";
        echo '<p class="foz"><a href="index.html">Click hear</a> to retrun main page</p>';
        $smtp->close();
        $conn->close();
    }
?>