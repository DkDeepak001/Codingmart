<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Time sheet updation</h1>


<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Password#123');
define('DB_NAME', 'Codingmart');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{

}
$sql = "SELECT * FROM Codingmart"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn, $sql);

echo "<table>"; // start a table tag in the HTML

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td> <style>
    table, th, td {
  border: 1px solid black;
  padding:10px;
 
}
</style>" . $row['Emp_id']. "&nbsp</td>&nbsp&nbsp<td >&nbsp" .$row['Email'] . "</td>" . "</td>&nbsp&nbsp<td >&nbsp" .$row['timestamp'] . "</td>";
            }
        }
?>
</body>

</html>