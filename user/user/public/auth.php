<?php


$email=$_POST["email"];
$pass=$_POST["pass"];


include_once "conn.php";
$sql="SELECT * FROM users WHERE emailid='$email' and password='$pass'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){
    if($email=$row["emailid"] && $pass=$row["password"] ){
        session_start();
        $_SESSION["id"]=$row["id"];
        
       ?>

<script>

window.location.href='index.php';
</script>

<?php
    }
    else{



        ?>


<script>
window.location.href="login.php";


</script>
<?php
    }
    
}








?>