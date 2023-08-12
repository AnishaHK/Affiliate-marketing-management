<?php

include_once "connection.php";
$name=$_POST["name"];
$cnum=$_POST["cnum"];
$cdate=$_POST["cdate"];
$id=$_POST["id"];
$amount=$_POST["amount"];
$bank=$_POST["bank"];
$user=$_POST["user"];


$sql="UPDATE cheque SET cusid='$name',cheque_number='$cnum',cheque_date='$cdate',amount='$amount',bank='$bank',user='$user' WHERE tid='$id'";
$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>


    alert("update");
    window.location.href="clienttransaction.php";


</script>
<?php
}


$sql10="UPDATE transactions SET cusid='$name',amount='$amount',user='$user' WHERE id='$id'";
$res=mysqli_query($conn,$sql10);









?>