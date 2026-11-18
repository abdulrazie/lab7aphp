<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php 
        $name = "Adam bin Abu"; 
        $matricnumber = "AI250111"; 
        $course = "Software Design"; 
        $yos = "2027"; 
        $address = "Taman U"; 
    ?>
    <table border="1" cellpadding="5">
        <tr>
            <td>Name:</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number:</td>
            <td><?php echo $matricnumber; ?></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study:</td>
            <td><?php echo $yos; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
