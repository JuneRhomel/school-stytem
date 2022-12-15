<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION["Access"]) && $_SESSION['Access'] == "administrator") {
    echo "Welcome ".$_SESSION['UserLogin'];
}else {
    echo header("Location: index.php");
}


$connect = "../connection/connection.php";
include_once($connect);
$con = connection();


$sql = "SELECT * FROM student_list ORDER BY id DESC";
$student = $con->query($sql) or die($con->error);

$row = $student->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

    
</head>

<body>



</body>

</html>