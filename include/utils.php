<?php
			 function verificarPagina( $pagina ){
					if( $pagina['url'] == basename( $_SERVER['PHP_SELF'] ) ){
						return true;
					}else{
						return false;
					}
			 }

			function encurtar( $texto, $tamanho = 250 ){
				$textoCurto = substr( $texto, 0 , $tamanho );
				$novoTamanho = strrpos( $textoCurto, ' ' ); //Encontra a última ocorrencia	e retorna sua posição			
				return substr( $texto, 0, $novoTamanho );
			}

			function validaForm( $post ){
				$camposBranco = array();
				foreach( $post as $campo => $valor ){
					if( empty( $valor ) ){
						$camposBranco[] = $campo;
					}
				}
				  return ( $camposBranco ) ? $camposBranco :  true;
			}
