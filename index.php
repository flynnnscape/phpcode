<?php
    include 'database.php';

    $sql = "SELECT * FROM usertable";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"] . "<br>";
                echo "Name: " . $row["name"] . "<br>";
                echo "Email: " . $row["email"] . "<br>";
                echo "Password: " . $row["password"] . "<br>";
                echo "Contact: " . $row["contact"] . "<br>";
                echo "Gender: " . $row["gender"] . "<br>";
                echo '------------------------------------------------<br>';
                }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>
</body>
</html>