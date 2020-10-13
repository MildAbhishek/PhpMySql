<?php
/**
 * Templet File Doc Comment
 * 
 * PHP version /
 * 
 * @category Tenplete_Class
 * @package  Templete_Class
 * @author   Author <author@domain.com>
 * @license  http://opensource.org/MIT MIT License
 * @link     http://localhost/
 */
session_start();
require 'config.php';
echo "<head><link href='style.css' rel='stylesheet'></head>";
 echo "<h3>You have logged in successfully</h3>";
 echo "Subscriber ID: ".$_SESSION['userdata']['subscriberid']."<br>";
 echo "Subscriber Name: ".$_SESSION['userdata']['subscribername']."<br>";
 echo "Subscriber Email: ".$_SESSION['userdata']['subscriberemail']."<br><br><br>";

 echo "<a href='index.php' class='link'>Logout</a>";
?>