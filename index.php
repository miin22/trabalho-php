<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adm/css/Estilo.css" >
    <title>Document</title>
</head>
<body>
    <?php
    // pegar os arquivos na pasta

    $pasta = "adm/img/";

    $img = glob("$pasta{*.jpg,*.png,*.gif,*.jfif,*.avif}", GLOB_BRACE);

   // print_r($arq);

    foreach( $img as $pos) {
    echo"<img src='" . $pos . "'  class='pos'>";
    }
    ?>
</body>
</html>