<?php


session_start();
$name=$_SESSION["name"];

$cid=$_POST["id"];
$mode=$_POST["mode"];
echo $mode;
$number=$_POST["trnumber"];
$date=$_POST["trdate"];
$amount=$_POST["amount"];


$comname=$_POST["comname"];






include_once "conn.php";
$sql0="select id from transactions ORDER BY id DESC LIMIT 1";

$res10=mysqli_query($conn,$sql0);
while($row=mysqli_fetch_assoc($res10)){
  $tid= $row["id"]+1;
}


include_once "conn.php";
$sql="INSERT INTO online(cusid,onlinemode,amount,tr_number,tr_date,type,user,tr_id) VALUES('$comname','$mode','$amount','$number','$date','company','$name',$tid)";

$res=mysqli_query($conn,$sql);
if($res){



    ?>

<script>
    alert("transaction completed");
    window.location.href="company.php";





</script>

<?php
}

$sql1="INSERT INTO transactions(cusid,mode,amount,type) VALUES('$comname','online','$amount','company')";
$res1=mysqli_query($conn,$sql1);








?>