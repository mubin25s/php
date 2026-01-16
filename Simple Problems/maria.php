<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
    die("Connection failed");
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Student</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Grade: <input type="text" name="grade" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Add</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, age, grade, email)
            VALUES ('$name','$age','$grade','$email')";
    $conn->query($sql);
}
?>

<h2>Student Records</h2>
<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Age</th><th>Grade</th><th>Email</th><th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['grade']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='?delete={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>

<?php
if (!empty($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id");
}
?>

</body>
</html>