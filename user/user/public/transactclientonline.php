<?php

session_start();
$name=$_SESSION["name"];
$cid=$_POST["id"];
$mode=$_POST["mode"];
echo $mode;
$number=$_POST["trnumber"];
$date=$_POST["trdate"];
$amount=$_POST["amount"];


include_once "conn.php";
$sql="INSERT INTO online(cusid,onlinemode,amount,tr_number,tr_date,type,user) VALUES('$cid','$mode','$amount','$number','$date','clients','$name')";

$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>
    alert("transaction completed");
    window.location.href="clients.php";





</script>

<?php
}

$sql1="INSERT INTO transactions(cusid,mode,amount,type,user) VALUES('$cid','online','$amount','clients','$name')";
$res1=mysqli_query($conn,$sql1);


$sql100="SELECT * FROM client WHERE id=$cid";
$res10=mysqli_query($conn,$sql100);


while($row=mysqli_fetch_array($res10)){
$email=$row["email"];
$cname=$row["cname"];


}


$msg="Hello $cname,Thank you for transaction of amount of Rs $amount by $mode by user $name";
mail("$email","Transaction Completed",$msg);







?>