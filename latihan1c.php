<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .box {
            border: 1px solid black;
            padding: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
    // Variabel untuk menyimpan huruf
    $huruf = ['A', 'B', 'C'];

    // Looping untuk membuat kotak dan menampilkan huruf
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "<div class='box'>";
            echo $huruf[$j];
            echo "</div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
