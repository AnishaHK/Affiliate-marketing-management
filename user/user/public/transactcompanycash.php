<?php


session_start();
$name=$_SESSION["name"];

$cid=$_POST["id"];

$amount=$_POST["amount"]."<br>";

$tr_date=$_POST["tr_date"];
$type=$_POST["type"];
$mode=$_POST["mode"];
$comname=$_POST["comname"];
echo $comname;


include_once "conn.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type,user,tr_date) VALUES('$comname','cash','$amount','company','$name','$tr_date')";
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













