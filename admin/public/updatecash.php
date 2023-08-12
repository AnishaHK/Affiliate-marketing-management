<?php

include_once "connection.php";
$name=$_POST["name"];
$id=$_POST["id"];
$amount=$_POST["amount"];
$user=$_POST["user"];
$trdate=$_POST["trdate"];

$sql="UPDATE transactions SET cusid='$name',amount='$amount',user='$user',tr_date='$trdate' WHERE id='$id'";
$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>


    alert("updated");
    window.location.href="usertransaction.php";


</script>
<?php
}












?>