<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM students WHERE id=$id");

echo "<script>alert('Data deleted successfully');</script>";
header("Location: index.php");
echo "<script>alert('Data deleted successfully');</script>";

?>