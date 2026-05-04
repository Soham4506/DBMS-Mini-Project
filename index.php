<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>🎓 Student Management System</h2>

    <a href="add.php" class="btn">➕ Add Student</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Marks</th>
            <th>Contact</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM students");

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['marks']}</td>
                <td>{$row['contact']}</td>
                <td class='action'>
                    <a href='edit.php?id={$row['id']}'>✏️</a>
                    <a href='delete.php?id={$row['id']}'>❌</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
