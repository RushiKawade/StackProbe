<?php
session_start();
$tech=$_POST['tech'];

$connect = mysqli_connect("localhost", "root", "", "sp1");  
 $query = "SELECT DISTINCT * FROM mytable WHERE tags LIKE '%$tech%' LIMIT 20";  
 $result = mysqli_query($connect, $query);
$_SESSION['text'] = "";
 while ($row = $result->fetch_assoc()) {

 	$_SESSION['text'] = $_SESSION['text'].$row['tags']."\n";
    echo $row['tags']."<br>";
    header("Location: serv3.1.php");
}

?>

