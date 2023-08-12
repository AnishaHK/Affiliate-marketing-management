<?php


$cid=$_POST["id"];
$mode=$_POST["mode"];
echo $mode;
$number=$_POST["trnumber"];
$date=$_POST["trdate"];
$amount=$_POST["amount"];


include_once "connection.php";
$sql="INSERT INTO online(cusid,onlinemode,amount,tr_number,tr_date,type) VALUES('$cid','$mode','$amount','$number','$date','company')";

$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>
    alert("transaction completed");
    window.location.href="company.php";





</script>

<?php
}

$sql1="INSERT INTO transactions(cusid,mode,amount,type) VALUES('$cid','online','$amount','company')";
$res1=mysqli_query($conn,$sql1);








?>