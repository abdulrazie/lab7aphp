<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            $area = $width * $height;
            return $area;
        }

        $width = 4;
        $height = 2;
        $totalArea = calculateArea($width, $height);

        echo "<b>The area of a rectangle with a width of $width and $height is $totalArea</b>";
    ?>
</body>
</html>
