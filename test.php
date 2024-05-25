<?php
 $server="localhost";
 $username="root";
 $password="";
 $database_name="codeNintern";

 $conn=mysqli_connect($server,$username,$password,$database_name);

 if(!$conn){
    die("Connection to the database failed due to".mysqli_connect_error());
 }

 $Namef=$_POST['Name'];
 $Emailf=$_POST['Email'];
 $Contactf=$_POST['Contact'];
 $Messagef=$_POST['Message'];

 $sql="INSERT INTO contact(Name, Email,Contact, Message) VALUES ('$Namef','$Emailf','$Contactf','$Messagef');";

 $conn->query($sql);
 ?>