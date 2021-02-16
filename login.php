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
$email = $password  =  "";
$email = ($_POST["email"]);
$password = ($_POST["password"]);

        $sql = "select *from Codingmart where Email = '$email' and Password = '$password'";  
        session_start();
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION["loggedin"] = true;                            
            $_SESSION["Email"] = ($_POST["email"]); 
            $_SESSION["id"] = session_id() . uniqid();
            $sesid = $_SESSION["id"];
            echo $sesid;
            echo $semail;
            $sql2 = "UPDATE `Codingmart` SET `timestamp`=CURRENT_TIMESTAMP WHERE Email='$email'" ;
            if ($conn->query($sql2) === TRUE) {
                header("Location:welcome.php");  
            }
            }  
        else{  
             header("Location:login.html");  



        }     

?>