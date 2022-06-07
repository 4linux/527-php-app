						<?php                    
							   if( $_POST ){
									$retorno = validaForm( $_POST );
									if( !is_array( $retorno ) ){
										if( inserir( 'fale_conosco', $_POST ) ){
											$class = " alert-success";
											$message = "Formulário gravado com sucesso!";
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
      <form class="form-horizontal" action='' method="POST">
          <div id="legend">
              <legend class=""><h1>Fale Conosco</h1></legend>
          </div>
          <div class="<?php print $class; ?>">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo ( isset( $message ) ) ? $message : '' ?>
          </div>
          <div class="control-group">
              <label class="control-label" for="nome">Nome:</label>
              <div class="controls">
                  <input type="text" id="nome" name="nome" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="email">E-mail:</label>
              <div class="controls">
                  <input type="text" id="email" name="email" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="assunto">Assunto:</label>
              <div class="controls">
                  <input type="text" id="assunto" name="assunto" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="mensagem">Mensagem:</label>
              <div class="controls">
                  <textarea rows="5" name="mensagem"></textarea>
              </div>
          </div>
          <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                  <button>Enviar Mensagem</button>
              </div>
          </div>
      </form>
  </div>
</div>

<hr />
