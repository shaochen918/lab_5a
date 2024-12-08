<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Tan Shao Chen";
        $matricNo = "AI210212";
        $course = "BIP";
        $yos = "3";
        $address = "3, Jalan Suria 2, Taman Purnama, Kluang, Johor."
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year Of Study</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo "$name"; ?></td>
            <td><?php echo "$matricNo"; ?></td>
            <td><?php echo "$course"; ?></td>
            <td><?php echo "$yos"; ?></td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>