<?php




$cid=$_POST["id"];

$amount=$_POST["amount"]."<br>";


$type=$_POST["type"];
$mode=$_POST["mode"];


include_once "connection.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type) VALUES('$cid','cash','$amount','company')";
$res=mysqli_query($conn,$sql);
if($res){


    ?>


<script>

    alert("transaction completed");
    window.location.href="company.php";




</script>

<?php
}



?>













