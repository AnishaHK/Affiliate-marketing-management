<?php

session_start();
$name=$_SESSION["name"];
$number=$_POST["chequenum"];
$date=$_POST["chequedate"];
$amount=$_POST["chequeamount"];
$bank=$_POST["bank"];

$comname=$_POST["comname"];


include_once "conn.php";
$sql0="select id from transactions ORDER BY id DESC LIMIT 1";

$res10=mysqli_query($conn,$sql0);
while($row=mysqli_fetch_assoc($res10)){
  $tid= $row["id"]+1;
}








$cid=$_POST["id"];

include_once "conn.php";
$sql="INSERT INTO transactions(cusid,mode,amount,type,user) VALUES('$comname','cheque','$amount','company','$name')";
$res=mysqli_query($conn,$sql);
if($res){


    ?>
<script>

alert("transaction successfull");
window.location.href="company.php";
</script>

<?php

}



$sql2="INSERT INTO cheque(cusid,cheque_number,cheque_date,amount,bank,type,user,tid) VALUES('$comname','$number','$date','$amount','$bank','company','$name','$tid')";
$res2=mysqli_query($conn,$sql2);

?>