<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:27
 */

$dbname = "dohome";
$host='localhost';
$user='root';
//$pass='root';

$db = new PDO("mysql:host=$host;dbname=$dbname", "$user");
$db->query("SET NAMES UTF8");