<?php
// receber o arquivo da Imagem
$imagem = $_FILES["imagem"];
$tmp = $imagem["tmp_name"];
$dir = "img/".$imagem["name"];

if ($imagem["error"] == 0){

    if (move_uploaded_file($tmp,$dir)){
        echo"Arquivo cadastrado com sucesso";
    }
}else{
    echo "Erro de upload";
} 
?>