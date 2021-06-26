<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'motors_database';

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM motors_values ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM on_button ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM off_button ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

$sql4 = mysqli_query($connection, "SELECT * FROM directions ORDER BY id DESC LIMIT 1");

$print_data4 = mysqli_fetch_row($sql4);

echo "RECORDING THE LAST DATA FOR THE MOTORS...";
echo "<br>";
echo "<br>";

echo "SAVED BUTTON";
echo"<hr>";

echo "id = ".$print_data[0];
echo "<br>";
echo "Motor1 =  ".$print_data[1];
echo "<br>";
echo "Motor2 =  ".$print_data[2];
echo "<br>";
echo "Motor3 =  ".$print_data[3];
echo "<br>";
echo "Motor4 =  ".$print_data[4];
echo "<br>";
echo "Motor5 =  ".$print_data[5];
echo "<br>";
echo "Motor6 =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"ON BUTTON";
echo "<hr>";
echo "id =  ".$print_data2[0];
echo"<br>";
echo "IsOn =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"OFF BUTTON";
echo"<hr>";
echo "id =  ".$print_data3[0];
echo"<br>";
echo "IsOff =  ".$print_data3[1];
echo "<br>";
echo "<br>";




echo"DIRECTIONS BUTTONS";
echo"<hr>";
echo "id = ".$print_data4[0];
echo "<br>";
echo "Forward =  ".$print_data4[1];
echo "<br>";
echo "Backward =  ".$print_data4[2];
echo "<br>";
echo "Stop =  ".$print_data4[3];
echo "<br>";
echo "LeftD =  ".$print_data4[4];
echo "<br>";
echo "RightD =  ".$print_data4[5];
echo"<br>";
echo"<br>";

?>