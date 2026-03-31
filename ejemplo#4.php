<html>
<head>
    <title>Ejemplo de  variables</title>
</head>
<body>
    <h1>
        Ejemplo de Bucle for
    </h1>
    <?php
    for ($size = 1; $size <= 6; $size++){
        echo "<span style=\"font-size: {$size}rem\"> Tamaño {$size}rem</span><br>\n";
    }
    ?>
</body>
</html>