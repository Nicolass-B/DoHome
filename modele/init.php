<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:27
 */
    $connect =  mysqli_connect('localhost', 'root', 'root', 'dohomebdd', 3306);
    if(!$connect)
    {
        die("connection failed: " . mysqli_connect_error());
}
    else{
        echo "connecter";
    }
    ?>