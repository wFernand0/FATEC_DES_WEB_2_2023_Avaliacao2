

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<?php

print_r($_POST);
$filename = 'livros.txt';

if(!file_exists('livros.txt')){
    $handle=  fopen('livros.txt','w');
}else{
    $handle = fopen('livros.txt','a');
}

fwrite($handle, $_POST['titulo']);
fwrite($handle,",");
fwrite($handle,$_POST['autor']);
fwrite($handle,"\n");
write($handle, $_POST['genero']);
fwrite($handle,",");
fwrite($handle,$_POST['ano']);
fwrite($handle,"\n");
fflush($handle);
fclose($handle);




?>
</body>
</html>