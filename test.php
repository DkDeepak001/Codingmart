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
$email = $password =$cpass =  "";
$email = ($_POST["email"]);
$password = ($_POST["password"]);
$cpass = ($_POST["cpassword"]);



if ($password == $cpass && empty($email)!=TRUE && empty($password)!=TRUE &&empty($cpass)!=TRUE ){
    

    $sql = "INSERT INTO `Codingmart` (`Emp_id`, `Email`, `Password`,`timestamp`) VALUES (NULL, '$email', '$password',CURRENT_TIMESTAMP);";

    if ($conn->query($sql) === TRUE) {
        header("Location:login.html");
    } else {
    }

    $conn->close();
}else{
    header("Location:register.html");
}

    


?>