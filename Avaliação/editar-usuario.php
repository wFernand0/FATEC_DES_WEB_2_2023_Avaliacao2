<h1>Editar Candidato</h1>

<?php
    $sql = "SELECT *FROM candidatos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php 
    print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="
        form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" value="<?php print $row->cpf; ?>" class="
        form-control">
    </div>    
    <div class="mb-3">
        <label>telefone</label>
        <input type="number" name="telefone" value="<?php print $row->telefone; ?>" class="
        form-control">
    </div>    
    <div class="mb-3">
        <label>Escola Publica?</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="publica" id="publica" value="Sim"><span>Sim</span>
                    <input type="radio" name="publica" id="publica" value="Nao" checked><span>Não</span>
    </div> 
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>    
    </div>
</form>    