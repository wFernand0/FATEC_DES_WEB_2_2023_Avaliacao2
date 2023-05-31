<h1>Novo Candidato</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="
        form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="
        form-control">
    </div>    
    <div class="mb-3">
        <label>telefone</label>
        <input type="number" name="telefone" class="
        form-control">
    </div>    
    <div class="mb-3">
        <label>Escola Publica?</label>
        <input type="radio" name="publica" id="publica" value="Sim"><span>Sim</span>
                    <input type="radio" name="publica" id="publica" value="Nao" checked><span>Não</span>
    </div> 
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>    
    </div>
</form>    