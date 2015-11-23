<?php

/* 
 * Controller Pessoas.
 */

class Pessoas extends Controller {
    
    public function index($pr = '') {
        //Abrir o Modelo
        $this->Model('tb_pessoas');
        $cm = new tb_pessoas();
        
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
        $this->view('pessoas/Lista');       
    }
    
    public function Novo($pr='') {
        $_SESSION['ID'] = $pr;
        //Modelo
        $this->Model('tb_pessoas');
     
        $cm = new tb_pessoas();       
        //Insert pelo modelo
        if(isset($_POST['bntsalvar'])){
            if($_POST['pess_ativo']!='on'){$ativo ='off';}else{$ativo ='on';}
            $dados = "'".$cm->converter_datas($_POST['pess_dtCad'])."',
              '".$_POST['pess_Nome']."',
              '".$_POST['pess_telefone']."',
              '".$_POST['pess_email']."',
              '".$ativo."'
               ";         
           $GLOBALS['msg'] = $cm->Insert($dados);  
        }
        //View
        $this->view('pessoas/Novo');
    }
    
    public function Editar($pr = '') {
        $_SESSION['ID'] = array('0',$pr);
        //Modelo
        $this->Model('tb_pessoas');      
        $cm = new tb_pessoas();
        
        //Salvar pelo modelo
        if($_POST['pess_ativo']== null){$ativo ='off';}else{$ativo ='on';}      
        if(isset($_POST['bntsalvar'])){
          $dados = array(
              $_POST['pess_ID'],
              $_POST['pess_dtCad'],
              $_POST['pess_Nome'],
              $_POST['pess_telefone'],
              $_POST['pess_email'],
              $ativo
              );    
          $GLOBALS['msg'] = $cm->Update($dados);  
        }
        
        //Abrir select pelo modelo
        $rs = $cm->Select($_SESSION['ID']);
        $GLOBALS['n_row'] = $rs[0];
        $GLOBALS['Rows'] = $rs[1];
        
        //View
        $this->view('pessoas/Editar');
        
    }
    
    public function Delete($pr = '') {
        $_SESSION['ID']  = $pr;
        
        //Abrir o Modelo
        $this->Model('tb_pessoas');
        $cm = new tb_pessoas();
        
        $GLOBALS['msg'] = $cm->Delete($_SESSION['ID']);

       //View
        $this->view('pessoas/delete');
    }
}