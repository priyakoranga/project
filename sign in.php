<?php
$host="localhost";
$username="root";
$password="";
$dbname="trial";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
  die ("failed" .mysqli_connect_error());

}
?>
<?php
if($_host["Request_Method"]=='POST'){
  $name=$_POST['name'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  
  
  $sql="SELECT * FROM trial WHERE email='$email'";
  $result=mysqli_query($conn,$sql);
  
  if($result->nums_row>0){
    $row=$result->fetch_assoc();
  
    if(password_verify($password, $row['password'])){
      echo "sign in successful";
  
    }
    else{
   
      echo "invalid password";
    }
  }
  else{
    echo "you data is not found";
  }
  }
  mysqli_close($host);
?>