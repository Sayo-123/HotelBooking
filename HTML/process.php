<?php
  $host="localhost";
  $user="root";
  $password="";
  $db="hotelbooking";


 $conn = new mysqli($host,$user,$password,$db);
  

  if(isset($_POST['user'])){
      $uname = $_POST['user'];
      $pass = $_POST['pass'];

      $sql = "select * from login where username='".$uname."' AND  password='".$pass."' limit 1 ";

        
       if($conn->query($sql)==TRUE){
           echo "You Have Successfully LoggedIn!";
           exit();
       }  
       else{
           echo "You have entered incorrect password!";
           exit();
       }
 
    }

session_start();
 
if (isset($_POST['Login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM login WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
           // echo '<p class="success">Congratulations, you are logged in!</p>';
           header("location:user.html"); 
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
$conn->close();

?>