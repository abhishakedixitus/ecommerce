<?php

include 'connection.php';
$editid = $_GET['editid'];
//in case the edit file is run alone

if(!isset($editid)||empty($editid)){
    header("location:check-user-table.php");
}

$sql = "SELECT * FROM users WHERE ID = '{$editid}'";
$result = $conn->query($sql) or die(mysqli_error());
$row = $result->fetch_assoc();
//when page post method apply
if($_POST){

    $id = $_POST['id'];
    $username = $_POST['txt1'];
    $password = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $email = $_POST['txt4'];

    $sql2 = "UPDATE users SET  username = '{$username}', password='{$password}', u_mobile='{$mobile}', u_email='{$email}' where id = '{$id}'";
    $result2 = $conn->query($sql2) or die(mysqli_error());

    if($result2){
        echo "<script> alert('Record Updated');window.location='check-user-table.php' ;</script>";
    }
}
?>

<html>
<body>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    USERNAME : <input type="text" value="<?php echo $row["username"]; ?>" name="txt1">
    PASSWORD : <input type="text" value="<?php echo $row["password"]; ?>" name="txt2">
    MOBILE : <input type="text" value="<?php echo $row["mobile"]; ?>" name="txt3">
    EMAIL : <input type="text" value="<?php echo $row["email"]; ?>" name="txt4">
    <br>
    <input type="submit" value="Update Record">
</form>
</body>


</html>
