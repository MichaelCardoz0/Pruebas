<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css"/>
    <title>promedio</title>
</head>
<body>
    <?php

    extract($_POST);


    $notatotal=($nota1+$nota2+$nota3+$nota4+$nota5)/5;

    ?>

    <h1><?php

        echo "El estudiante de $materia se llama $nombre $apellido
        y su promedio es $notatotal";
        ?></h1></br>

<h1>

    <?php


    if ($notatotal<=9) {
    echo "reprobó";
    }

    if ($notatotal >=10 & $notatotal <15) {
    echo "Aprobo con C";
    }

    if ($notatotal > 14 & $notatotal < 18) {
    echo "Aprobó con B";
    }


    if ($notatotal > 17 & $notatotal < 21) {
    echo "Aprobó con A";
    }
    ?>

</h1>



</body>
</html>