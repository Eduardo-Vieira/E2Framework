<?php
/*
 * Modelo tb_Usuário 
 **/
class tb_usuarioLogin extends Controller {
   //Tabela
    var $c = array('Tabela'=>'tb_usuario',
                   'Coluna'=>array(
                            'usua_ID',
                            'usua_NomeCompleto',
                            'usua_cpf',
                            'usua_login',
                            'usua_email',
                            'usua_senha'
                        ),
                    );
          
}

