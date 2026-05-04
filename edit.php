<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];
    $contact = $_POST['contact'];

    mysqli_query($conn, "UPDATE students SET
        name='$name',
        course='$course',
        marks='$marks',
        contact='$contact'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>✏️ Edit Student</h2>

    <form method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <input type="text" name="course" value="<?php echo $row['course']; ?>">
        <input type="number" name="marks" value="<?php echo $row['marks']; ?>">
        <input type="text" name="contact" value="<?php echo $row['contact']; ?>">

        <button class="btn" name="update">Update</button>
    </form>
</div>

</body>
</html>