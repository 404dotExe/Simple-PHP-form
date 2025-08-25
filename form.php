<!DOCTYPE html>
<html>
<head>
    <title>Add Record to textx Table</title>
</head>
<body>
    <h2>Add Details to textx Table (Database: yoyo)</h2>
    <form method="post" action="form.php">
        <label for="_id">ID:</label>
        <input type="number" id="_id" name="_id" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Add Record">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['_id']) && isset($_POST['name']) && isset($_POST['degree']) && isset($_POST['email']) && $_POST['_id'] !== "") {
        $_id = $_POST['_id'];
        $name = $_POST['name'];
        $degree = $_POST['degree'];
        $email = $_POST['email'];

    $con = mysqli_connect("localhost", "root", "", "yoyo");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

        $query = "INSERT INTO textx (_ID, Name, Degree, Email) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "isss", $_id, $name, $degree, $email);
        if (mysqli_stmt_execute($stmt)) {
            echo "<p>Record added successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($con) . "</p>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<p style='color:red;'>All fields are required. Please fill in the form completely.</p>";
    }
    if (isset($con) && $con instanceof mysqli) {
        mysqli_close($con);
    }
}
?>
</body>
</html>
