<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION["UserLogin"])) {
    echo "Welcome ".$_SESSION['UserLogin'];
}else {
    echo "Welcome Guest";
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

    <h1>Student List</h1>
    <br>
    <br>
    <a href="../js/add.php">Add New</a>

    <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php">Logout</a>
    <?php } else { ?>
    <a href="login.php">Login</a>
    <?php } ?>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php do {  ?>
            <tr>
                <td><a href="details.php">View</a></td>
                <td> <?php echo $row['first_name']; ?></td>
                <td> <?php echo $row['last_name']; ?></td>
            </tr>
            <?php } while($row = $student->fetch_assoc()) ?>
        </tbody>
    </table>
</body>

</html>