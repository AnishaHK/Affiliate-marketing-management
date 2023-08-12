<?php



$id=$_GET["id"];
include_once "connection.php";
$sql="DELETE  FROM users WHERE id=$id";


$res=mysqli_query($conn,$sql);
if($res){

    ?>

<script>

    alert("deleted successfully");

    window.location.href="users.php";



</script>
<?php
}


?>