<?php

/* 
 * clase de configuraçãoes
 */

Class Config {
    
        //Configuração dns para banco de dado
        var $dbset ='mysql'; //banco que sera uando
        var $dns = array(
            'mysql'=>array(
                'dns'=>'mysql:host=localhost;dbname=db_framework',
                'User'=>'root',
                'Senha'=>'wr@123' ),
            'mssql'=>array(
                 'dns'=>'"mssql:host=localhost;dbname=db_framework',
                 'User'=>'usuario',
                 'Senha'=>'senha' ),
            );
        
        //Titulo do sistema (Nome)
        var $titulo = 'E2 Framework';
        //versão do sistema
        var $versao = '1.0.0';

}