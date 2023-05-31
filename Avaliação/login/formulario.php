<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div class="wapper">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">   
<form action= "cadastrar.php" method="post">
            <div class="form-group">
                <label>Titulo</label>
                <input type="text" name="titulo" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Autor</label>
                <input type="text" name="autor" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Genero</label>
                <input type="text" name="genero" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Ano</label>
                <input type="text" name="ano" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
            <input type="submit" value= "Enviar">
            <a href="logout.php">Sair</a>
            <br><br>

            <a href="ler.php">Visualizar livros</a>
</form>
</div>
<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



?>
            
    
</body>
</html>