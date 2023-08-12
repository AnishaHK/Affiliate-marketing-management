<?php



$id=$_GET["id"];
include_once "connection.php";
$sql="DELETE  FROM client WHERE id=$id";


$res=mysqli_query($conn,$sql);
if($res){

    ?>

<script>

    alert("deleted successfully");

    window.location.href="clients.php";



</script>
<?php
}


?>