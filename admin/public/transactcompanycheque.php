<?php


$number=$_POST["chequenum"];
$date=$_POST["chequedate"];
$amount=$_POST["chequeamount"];
$bank=$_POST["bank"];

$cid=$_POST["id"];

include_once "connection.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type) VALUES('$cid','cheque','$amount','company')";
$res=mysqli_query($conn,$sql);
if($res){


    ?>
<script>

alert("transaction successfull");
window.location.href="users.php";
</script>

<?php

}



$sql2="INSERT INTO cheque(cusid,cheque_number,cheque_date,amount,bank,type) VALUES('$cid','$number','$date','$amount','$bank','company')";
$res2=mysqli_query($conn,$sql2);

?>