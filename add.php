<?php include 'db.php'; ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];
    $contact = $_POST['contact'];

    mysqli_query($conn, "INSERT INTO students(name, course, marks, contact)
    VALUES('$name', '$course', '$marks', '$contact')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>➕ Add Student</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="course" placeholder="Enter Course" required>
        <input type="number" name="marks" placeholder="Enter Marks" required>
        <input type="text" name="contact" placeholder="Enter Contact" required>

        <button class="btn" name="submit">Add Student</button>
    </form>
</div>

</body>
</html>