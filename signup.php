
<html>
<h1>You are logged in</h1>
</html>
<?php


include 'dbh.php';


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first, last, uid, pwd)
VALUE ('$first', '$last', '$uid', '$pwd')";

$result = mysqli_query($conn, $sql);

header("Location: index.php");


 
?>




