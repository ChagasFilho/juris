                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <div class="col-md-10">
                            <h1 class="page-header">Clientes</h1>
                        </div>

                        <div class="col-md-2">
                            <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/Cliente/cadastro">Novo Cliente</a>
                        </div>

                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($clientes as $cli) {?>

                                    <tr>
                                        <td><?= $cli->id_cliente; ?></td>
                                        <td><?= $cli->nome; ?></td>
                                        <td><?= $cli->email; ?></td>
                                        <td><?= $cli->status==1?'Ativo':'Inativo'; ?></td>
                                        <td>
                                            <a href="<?= base_url('index.php/Cliente/atualizar/'.$cli->id_cliente); ?>" class="btn btn-primary btn-group">Atualizar</a>
                                            <a href="<?= base_url('index.php/Cliente/excluir/'.$cli->id_cliente); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o Cliente?');">Remover</a>
                                        </td>
                                    </tr>

                                    <?php }?>
                                <tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>