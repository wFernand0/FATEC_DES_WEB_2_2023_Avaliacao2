<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':

            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $publica = $_POST["publica"];

            $sql = "INSERT INTO candidatos (nome,
            cpf, telefone, publica) VALUES  (
                '{$nome}', '{$cpf}', '{$telefone}',
                '{$publica}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro
                 com sucesso!');</script>";
                print "<script>location.href='?page=listar
                ';</script>"; 
            }else{
                print "<script>alert('Não foi possivel
                 realizar o cadastro!');<script>";
                print "<script>location.href='?page=listar
                ';</script>"; 
            }
        
            break;
            
        case 'editar':

            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $publica = $_POST["publica"];

            $sql = "UPDATE Candidatos SET 
                        nome = '{$nome}',
                        cpf = '{$cpf}',
                        telefone = '{$telefone}',
                        publica = '{$publica}'
                    WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
            }else{
                print "<script>alert('Não foi possivel editar!');<script>";
                print "<script>location.href='?page=listar';</script>"; 
            }
            
            break;

        case 'excluir':

            $sql = "DELETE FROM candidatos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('exluido com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; 
            }else{
                print "<script>alert('Não foi possivel excluir!');<script>";
                print "<script>location.href='?page=listar';</script>"; 
            }
            
            break;    
    }
  
?>    