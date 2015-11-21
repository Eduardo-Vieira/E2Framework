<?php
/* 
 * Controller Usuário.
 */
class Usuario extends Controller {
    
    public function index($pr = '') {
        //Abrir o Modelo
        $this->Model('tb_usuario');
        $cm = new tb_usuario();
        
        //Busca por coluna
        if(isset($_POST['BUSCAR'])){
             $_SESSION['ID'] = array(
                                     $_POST['COLUNA'],
                                     $_POST['PARAMENTRO']
                                     );
            //Abrir select pelo modelo
            $rs = $cm->Select($_SESSION['ID']);
            $GLOBALS['n_row'] = $rs[0];
            $GLOBALS['Rows'] = $rs[1];     
        }  else {
            //Abrir select pelo modelo
            $rs = $cm->Select();
            $GLOBALS['n_row'] = $rs[0];
            $GLOBALS['Rows'] = $rs[1];
        }
        
        
        //Chamar a View
        $this->view('usuario/Lista');       
    }
    public function Novo($pr='') {
        $_SESSION['ID'] = $pr;
        //Modelo
        $this->Model('tb_usuario');
        $cm = new tb_usuario();       
        //Insert pelo modelo
        if(isset($_POST['bntsalvar'])){
          $dados = "'".$_POST['usua_NomeCompleto']."',
              '".$_POST['usua_cpf']."',
              '".$_POST['usua_login']."',
              '".$_POST['usua_email']."'
               ";         
           $GLOBALS['msg'] = $cm->Insert($dados);  
        }
        
        //View
        $this->view('usuario/Novo');
    }
    public function Editar($pr = '') {
        $_SESSION['ID'] = array('0',$pr);
        //Modelo
        $this->Model('tb_usuario');      
        $cm = new tb_usuario();
        
        //Salvar pelo modelo
        if(isset($_POST['bntsalvar'])){
          $dados = array(
              $_POST['usua_ID'],
              $_POST['usua_NomeCompleto'],
              $_POST['usua_cpf'],
              $_POST['usua_login'],
              $_POST['usua_email']
              );    
          $GLOBALS['msg'] = $cm->Update($dados);  
        }
        
        //Abrir select pelo modelo
        $rs = $cm->Select($_SESSION['ID']);
        $GLOBALS['n_row'] = $rs[0];
        $GLOBALS['Rows'] = $rs[1];
        
        //View
        $this->view('usuario/Editar');
        
    }
}