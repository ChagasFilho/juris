                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        
                        <div class="col-md-12">
                            <h1 class="page-header">Atualizar Usuário</h1>
                        </div>
                        
                        <div class="col-md-12">
                            <form action="<?= base_url(); ?>index.php/Usuario/salvar_atualizacao" method="post">
                                <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $usuario[0]->id_usuario; ?>">

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome ..." value="<?= $usuario[0]->nome; ?>" required>
                                        </div>                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Informe o e-mail ..." value="<?= $usuario[0]->email; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                                        
                                        <div class="form-group">
                                            <label for="senha">Senha:</label>
                                            <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal">
                                        </div>
                                    </div>
                                    <div class="col-md-2">                                        
                                        <div class="form-group">
                                            <label for="nivel">Nível:</label>
                                            <select id="nivel" name="nivel" class="form-control" required>
                                                <option value="0"> --- </option>
                                                <option value="1" <?= $usuario[0]->nivel==1?' selected ':''; ?>> Administrador </option>
                                                <option value="2" <?= $usuario[0]->nivel==2?' selected ':''; ?>> Usuário </option>
                                            </select>
                                        </div>
                                    </div>                                                                        
                                    <div class="col-md-2">                                        
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="0"> --- </option>
                                                <option value="1" <?= $usuario[0]->status==1?' selected ':''; ?>> Ativo </option>
                                                <option value="2" <?= $usuario[0]->status==2?' selected ':''; ?>> Inativo </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                
                                <div style="text-align: right">
                                    <button type="submit" class="btn btn-success">Enviar</button>    
                                    <button type="reset" class="btn btn-default">Cancelar</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url(); ?>index.php/Usuario/salvar_senha" method="post">
            
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $usuario[0]->id_usuario; ?>">        

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="senha_antiga">Senha Antiga:</label>
                            <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="senha_nova">Nova Senha:</label>
                            <input type="password" name="senha_nova" onkeyup="checarSenha()" id="senha_nova" class="form-control">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="senha_confirmar">Confirmar Senha:</label>
                            <input type="password" name="senha_confirmar" onkeyup="checarSenha()" id="senha_confirmar" class="form-control">
                        </div>

                        <div class="col-md-12 form-group">
                            <div id="divcheck">
                                
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="enviarsenha" disabled>Salvar</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    $(document).ready(function() {
        $("#senha_nova").keyup(checarSenha);
        $("#senha_confirmar").keyup(checarSenha);
    });

    function checarSenha() {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();

        if (password == '' || '' == confirmPassword){
            $("#divcheck").html("<span style='color: red'>Campo de senha vazio!</span>");
            document.getElementById("enviarsenha").disabled = true;
        }
        else if (password != confirmPassword) {
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } 
        else {
            $("#divcheck").html("<span style='color: green'>Senhas iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;            
        }
    }

</script>>