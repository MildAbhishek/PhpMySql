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
$servername='localhost:3307';
$username='root';
$password='';
$dbname='store';

$conn=new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "connection failed";
} else {
    //echo "connected successfully";
}
?>