                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        
                        <div class="col-md-12">
                            <h1 class="page-header">Novo Usuário</h1>
                        </div>
                        
                        <div class="col-md-12">
                            <form action="<?= base_url(); ?>index.php/Usuario/cadastrar" method="post">

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome ..." required>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-3">                                        
                                        <div class="form-group">
                                            <label for="nivel">Nível:</label>
                                            <select id="nivel" name="nivel" class="form-control" required>
                                                <option value="0"> --- </option>
                                                <option value="1"> Administrador </option>
                                                <option value="2"> Usuário </option>
                                            </select>
                                        </div>
                                    </div>                                                                        
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Informe o e-mail ..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">                                        
                                        <div class="form-group">
                                            <label for="senha">Senha:</label>
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha ..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">                                        
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" required>
                                                <option value="0"> --- </option>
                                                <option value="1"> Ativo </option>
                                                <option value="2"> Inativo </option>
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