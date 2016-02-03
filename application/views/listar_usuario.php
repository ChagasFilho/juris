                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <div class="col-md-10">
                            <h1 class="page-header">Usuários</h1>
                        </div>

                        <div class="col-md-2">
                            <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/Usuario/cadastro">Novo Usuário</a>
                        </div>

                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Nível</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($usuarios as $usu) {?>

                                    <tr>
                                        <td><?= $usu->id_usuario; ?></td>
                                        <td><?= $usu->nome; ?></td>
                                        <td><?= $usu->email; ?></td>
                                        <td><?= $usu->nivel==1?'Administrador':'Usuário'; ?></td>
                                        <td><?= $usu->status==1?'Ativo':'Inativo'; ?></td>
                                        <td>
                                            <a href="<?= base_url('index.php/Usuario/atualizar/'.$usu->id_usuario); ?>" class="btn btn-primary btn-group">Atualizar</a>
                                            <a href="<?= base_url('index.php/Usuario/excluir/'.$usu->id_usuario); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a>
                                        </td>
                                    </tr>

                                    <?php }?>
                                <tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>