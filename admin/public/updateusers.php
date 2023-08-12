<?php

include_once "connection.php";
$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$whatsapp=$_POST["whatsapp"];

$email=$_POST["email"];
$pass=$_POST["password"];


$sql="UPDATE users SET fname='$fname',lname='$lname',pnumber='$whatsapp',emailid='$email',password='$pass' WHERE id='$id' ";


$res=mysqli_query($conn,$sql);

if($res){

    ?>
<script>
alert("updated");
window.location.href="users.php";

</script>


<?php
}









?>