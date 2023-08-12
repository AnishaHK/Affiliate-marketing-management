<?php
include_once "connection.php";
$id=$_POST["id"];
$name=$_POST["name"];
$website=$_POST["website"];
$adress=$_POST["adress"];
$city=$_POST["city"];
$pcode=$_POST["pcode"];
$number=$_POST["number"];
$landline=$_POST["landline"];
$email=$_POST["email"];
$gst=$_POST["gst"];
$bname=$_POST["bname"];
$ifsc=$_POST["ifsc"];
$branch=$_POST["branch"];
$anumber=$_POST["anumber"];
$accname=$_POST["accname"];
$upi=$_POST["upi"];

$sql="UPDATE company SET name='$name', adress='$adress',city='$city',pincode='$pcode',pnumber='$number',landline='$landline',email='$email',website='$website',gst='$gst',bankname='$bname',bankifsc='$ifsc',branch='$branch',
accnum='$anumber',accname='$accname' WHERE id='$id';
";


$res=mysqli_query($conn,$sql);

if($res){

    ?>
<script>
alert("updated");
window.location.href="company.php";

</script>


<?php
}






















?>