<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .box {
            border: 2px solid black;
            padding: 10px;
            display: inline-block;
            margin: 2px;
        }
        .clear {
            line-height: 10px;
        }
    </style>
</head>
<body>
    <?php
    // Variabel untuk menyimpan huruf
    $huruf = ['1', '2', '3','4','5'];

    // Looping untuk membuat kotak dan menampilkan huruf
    for ($i = 0; $i < 5; $i++) {
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
