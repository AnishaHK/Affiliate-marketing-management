<?php




session_start();
$name=$_SESSION["name"];

$cid=$_POST["id"];



$sql1="SELECT * FROM client WHERE id=$cid";
$res2=mysqli_query($conn,$sql1);


while($row=mysqli_fetch_array($res2)){
$email=$row["email"];
$cname=$row["cname"];


}
$amount=$_POST["amount"]."<br>";


$type=$_POST["type"];
$mode=$_POST["mode"];


$client=$_POST["client"];
echo $client;
include_once "conn.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type,user) VALUES('$client','$mode','$amount','$type','$name')";
$res=mysqli_query($conn,$sql);
if($res){


    ?>


<script>

    alert("transaction completed");
    window.location.href="clients.php";




</script>

<?php
}

$msg="Hello $cname,Thank you for transaction of amount of Rs $amount by $mode by user $name";
mail($email,"Transaction Completed",$msg);


?>













