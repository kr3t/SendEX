<?php
echo "ok";
 
$servername = "localhost";
$username = "exodus";
$password = "exodus1";
$dbname = "exodus";
$id = 1;
$on = $_POST['operation_number'];
$oa = $_POST['operation_amount'];
$od = $_POST['operation_datetime'];
$em = $_POST['email'];


echo $id." ".$on." ".$oa." ".$od." ".$em."<br>";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);} 


$sql2 = mysql_query('insert into exodus VALUES("$id","$on","$oa","$od","$em")');
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;}

echo"---<br>";
echo $sql2;

$conn->close();


//$result=mysql_query("select count(ile) as ile from test;");
//$data=mysql_fetch_assoc($result);
//echo "<br> ILE: ".$data['ile'];
//$result2=mysql_query("select sum(ile) as sum from test;");
//$data2=mysql_fetch_assoc($result2);
//echo "<br> SUMA: ".$data2['sum'];




mysql_close($connection); 
file_put_contents('dotpay.log', var_export($_POST, true), FILE_APPEND);

?>
