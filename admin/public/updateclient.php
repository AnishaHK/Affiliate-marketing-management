<?php
include_once "connection.php";

$name=$_POST["name"];
$cname=$_POST["cname"];
$adress=$_POST["adress"];
$city=$_POST["city"];
$pcode=$_POST["pcode"];
$pnumber=$_POST["pnumber"];
$whatsapp=$_POST["whatsapp"];
$landline=$_POST["landline"];
$email=$_POST["email"];
$gst=$_POST["gst"];
$id=$_POST["id"];


$sql="UPDATE client SET name='$name',contactname='$cname',address='$adress',city='$city',pincode='$pcode',pnumber='$pnumber',whatsapp='$whatsapp',landline='$landline',email='$email',gst='$gst'
WHERE id='$id'";













$res=mysqli_query($conn,$sql);

if($res){

    ?>
<script>
alert("updated");
window.location.href="clients.php";

</script>


<?php
}









?>