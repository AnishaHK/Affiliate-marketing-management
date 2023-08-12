<?php

include_once "connection.php";
$id=$_POST["id"];
$name=$_POST["name"];

$amount=$_POST["amount"];
$mode=$_POST["mode"];
$upi=$_POST["trno"];
$tr_date=$_POST["trdate"];
$user=$_POST["user"];


$sql="UPDATE online SET cusid='$name',amount='$amount',tr_number='$upi',onlinemode='$mode',
tr_date='$tr_date',user='$user' WHERE tr_id='$id'";
$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>


    alert("update");
    window.location.href="companytransaction.php";


</script>
<?php
}


$sql10="UPDATE transactions SET cusid='$name',amount='$amount',user='$user' WHERE id='$id'";
$res=mysqli_query($conn,$sql10);









?>