<?php

include 'functions.php';
// Place Initial php at the top of pages to retrieve the data you want display on the page
$students = getAllStudents($db_connection);
//pre_r($students);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Student_ID</th>
        <th>Last Name</th>
        <th>First Name</th>
    </tr>
    <?php foreach ($students as $student) { ;?>
    <tr>
        <td><?php echo $student['student_id']; ?></td>
        <td><?php echo $student['last_name']; ?></td>
        <td><?php echo $student['first_name']; ?></td>
    <?php }; ?>
</table>
</body>
</html>
