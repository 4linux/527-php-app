							<?php                    
							   if( $_POST ){
									$retorno = validaForm( $_POST );
									if( !is_array( $retorno ) ){
										if( $_POST['senha'] == $_POST['conf_senha'] ){
											unset( $_POST['conf_senha'] );
											if( inserir( 'clientes', $_POST ) ){
												$class = " alert-success";
												$message = "Formulário gravado com sucesso!";
											}
										}else{
											$class = " alert-error";
											$message = "As senhas não conferem, digite novamente";
										}
										
									}else{
										$class = " alert-error";
										$retorno = implode( "|", $retorno );
										$message = "Os seguintes campos estão em branco : $retorno";
									}
								}
							?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action="" method="POST">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Cadastre-se</h1></legend>
                </div>
                <div class="<?php print $class; ?>">
                    <button type="button" class="close" data-dismiss="alert">×</button>
						  <?php echo ( isset( $message ) ) ? $message : '' ?>
					 </div>
                <div class="control-group">
                    <label class="control-label" for="nome_razao">Nome / Razão Social</label>
                    <div class="controls">
                        <input type="text" id="nome_razao" name="nome_razao" placeholder="" class="input-xlarge" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cpf_cnpj">CPF/CNPJ</label>
                    <div class="controls">
                        <input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="senha">Senha</label>
                    <div class="controls">
                        <input type="password" id="senha" name="senha" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="conf_senha">Confirme a senha</label>
                    <div class="controls">
                        <input type="password" id="conf_senha" name="conf_senha" placeholder="" class="input-xlarge">

                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="telefone">Telefone</label>
                    <div class="controls">
                        <input type="text" id="telefone" name="telefone" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="celular">Celular</label>
                    <div class="controls">
                        <input type="text" id="celular" name="celular" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="endereco">Endereço</label>
                    <div class="controls">
                        <input type="text" id="endereco" name="endereco" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="bairro">Bairro</label>
                    <div class="controls">
                        <input type="text" id="bairro" name="bairro" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cidade">Cidade</label>
                    <div class="controls">
                        <input type="text" id="cidade" name="cidade" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="estado">Estado</label>
                    <div class="controls">
                        <input type="text" id="estado" name="estado" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cep">CEP</label>
                    <div class="controls">
                        <input type="text" id="cep" name="cep" placeholder="" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <input type="submit" >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>

<hr />
