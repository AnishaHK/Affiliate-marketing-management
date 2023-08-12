<?php
session_start();
$name=$_SESSION["name"];

$number=$_POST["chequenum"];
$date=$_POST["chequedate"];
$amount=$_POST["chequeamount"];
$bank=$_POST["bank"];
$comname=$_POST["comname"];
$cid=$_POST["id"];
$client=$_POST["client"];
include_once "conn.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type,user) VALUES('$client','cheque','$amount','clients','$name')";
$res=mysqli_query($conn,$sql);
if($res){


    ?>
<script>

alert("transaction successfull");
window.location.href="clients.php";
</script>

<?php

}






$sql2="INSERT INTO cheque(cusid,cheque_number,cheque_date,amount,bank,type,user) VALUES('$client','$number','$date','$amount','$bank','client','$name')";
$res2=mysqli_query($conn,$sql2);


$sql100="SELECT * FROM client WHERE id=$cid";
$res20=mysqli_query($conn,$sql100);


while($row=mysqli_fetch_array($res20)){
$email=$row["email"];
$cname=$row["cname"];


}


$msg="Hello $cname,Thank you for transaction of amount of Rs $amount by $mode by user $name";
mail("$email","Transaction Completed",$msg);
?>