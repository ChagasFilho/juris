                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        
                        <div class="col-md-12">
                            <h1 class="page-header">Novo Cliente</h1>
                        </div>
                        
                        <div class="col-md-12">
                            <form action="<?= base_url(); ?>index.php/Cliente/cadastrar" method="post">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome ..." required>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Cadastro:</label>
                                            <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" placeholder="Informe a Data de Cadastro ..." required>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_atendimento">1º Atendimento:</label>
                                            <input type="text" class="form-control" id="data_atendimento" name="data_atendimento" placeholder="Informe a Data do Primeiro Atendimento ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">                                        
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="0"> Status </option>
                                                <option value="1"> Ativo </option>
                                                <option value="2"> Inativo </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="logradouro">Rua:</label>
                                            <input type="text" class="form-control" id="nome" name="logradouro" placeholder="Informe o Logradouro ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="numero">Número:</label>
                                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Informe o Número ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="complemento">Complemento:</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o Complemento ...">
                                        </div>                                        
                                    </div>                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="cep">CEP:</label>
                                            <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o CEP ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cidade">Cidade:</label>
                                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">                                        
                                        <div class="form-group">
                                            <label for="uf">UF:</label>
                                            <select id="uf" name="uf" class="form-control">
                                                <option value=""> UF </option>
                                                <option value="AC"> AC </option>
                                                <option value="AL"> AL </option>
                                                <option value="AP"> AP </option>
                                                <option value="AM"> AM </option>
                                                <option value="BA"> BA </option>
                                                <option value="CE"> CE </option>
                                                <option value="DF"> DF </option>
                                                <option value="ES"> ES </option>
                                                <option value="GO"> GO </option>
                                                <option value="MA"> MA </option>
                                                <option value="MT"> MT </option>
                                                <option value="MS"> MS </option>
                                                <option value="MG"> MG </option>
                                                <option value="PA"> PA </option>
                                                <option value="PB"> PB </option>
                                                <option value="PR"> PR </option>
                                                <option value="PE"> PE </option>
                                                <option value="PI"> PI </option>
                                                <option value="RJ"> RJ </option>
                                                <option value="RN"> RN </option>
                                                <option value="RS"> RS </option>
                                                <option value="RO"> RO </option>
                                                <option value="RR"> RR </option>
                                                <option value="SC"> SC </option>
                                                <option value="SP"> SP </option>
                                                <option value="SE"> SE </option>
                                                <option value="TO"> TO </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cpf_cnpj">CPF/CNPJ:</label>
                                            <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="Informe o CPF ou CNPJ ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="rg_ie">RG/IE:</label>
                                            <input type="text" class="form-control" id="rg_ie" name="rg_ie" placeholder="Informe o RG ou IE ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ctps">CTPS:</label>
                                            <input type="text" class="form-control" id="ctps" name="ctps" placeholder="Informe o CTPS ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nit">NIT:</label>
                                            <input type="text" class="form-control" id="nit" name="nit" placeholder="Informe o NIT ...">
                                        </div>                                        
                                    </div>                                                               
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nome_mae">Nome da Mãe:</label>
                                            <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Informe o Nome da Mãe ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_nascimento">Nascimento:</label>
                                            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Informe a Data de Nascimento ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">                                        
                                        <div class="form-group">
                                            <label for="estado_civil">Estado Civil:</label>
                                            <select id="estado_civil" name="estado_civil" class="form-control">
                                                <option value="0"> Estado Civil </option>
                                                <option value="Solteiro(a)"> Solteiro(a) </option>
                                                <option value="Casado(a)"> Casado(a) </option>
                                                <option value="Separado(a)"> Separado(a) </option>
                                                <option value="Divorciado(a)"> Divorciado(a) </option>
                                                <option value="Viúvo(a)"> Viúvo(a) </option>
                                            </select>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_admissao">Admissão:</label>
                                            <input type="text" class="form-control" id="data_admissao" name="data_admissao" placeholder="Informe a Data de Admissão ...">
                                        </div>                                        
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_demissao">Demissão:</label>
                                            <input type="text" class="form-control" id="data_demissao" name="data_demissao" placeholder="Informe a Data de Demissão ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="profissao">Função Exercida:</label>
                                            <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Informe a Função Exercida ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="salario">Salário:</label>
                                            <input type="text" class="form-control" id="salario" name="salario" placeholder="Informe o Último Salário ...">
                                        </div>                                        
                                    </div>                                                               
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="beneficio">Tipo do Benefício:</label>
                                            <input type="text" class="form-control" id="beneficio" name="beneficio" placeholder="Informe o Tipo do Benefício ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="numero_beneficio">Número do Benefício:</label>
                                            <input type="text" class="form-control" id="numero_beneficio" name="numero_beneficio" placeholder="Informe o Número do Benefício ...">
                                        </div>                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefone">Telefone:</label>
                                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="celular">Celular:</label>
                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="Informe o Celular ...">
                                        </div>                                        
                                    </div>                                

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Informe o e-mail ...">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="observacao">Observacao:</label>
                                            <input type="text" class="form-control" id="observacao" name="observacao" placeholder="Informe a Observação ...">
                                        </div>                                        
                                    </div>
                                </div>

                                <div style="text-align: right">
                                    <button type="submit" class="btn btn-success">Enviar</button>    
                                    <a class="btn btn-default" href="<?= base_url(); ?>index.php/Cliente">Cancelar</a>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>