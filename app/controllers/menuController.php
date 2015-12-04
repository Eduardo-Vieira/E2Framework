<?php

/* 
 * Controller menu.
 */

class Menu extends Controller {
    
    public function index($pr = '') {
        //Abrir o Modelo
        $this->Model('tb_menu');
        $cm = new tb_menu();
        
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
        $this->view('menu/Lista');       
    }
    
    public function Novo($pr='') {
        $_SESSION['ID'] = $pr;
        //Modelo
        $this->Model('tb_menu');
     
        $cm = new tb_menu();       
        //Insert pelo modelo
        if(isset($_POST['bntsalvar'])){
            if($_POST['menu_Inativo']!='on'){$ativo ='off';}else{$ativo ='on';}
            $dados = "'".$_POST['menu_Nome']."',
              '".$_POST['menu_Link']."',
              '".$ativo."'
               ";         
           $GLOBALS['msg'] = $cm->Insert($dados);  
        }
        //View
        $this->view('menu/Novo');
    }
    
    public function Editar($pr = '') {
        $_SESSION['ID'] = array('0',$pr);
        //Modelo
        $this->Model('tb_menu');      
        $cm = new tb_menu();
        
        //Salvar pelo modelo
        if($_POST['menu_Inativo']== null){$ativo ='off';}else{$ativo ='on';}      
        if(isset($_POST['bntsalvar'])){
          $dados = array(
              $_POST['menu_IdMenu'],
              $_POST['menu_Nome'],
              $_POST['menu_Link'],
              $ativo
              );    
          $GLOBALS['msg'] = $cm->Update($dados);  
        }
        
        //Abrir select pelo modelo
        $rs = $cm->Select($_SESSION['ID']);
        $GLOBALS['n_row'] = $rs[0];
        $GLOBALS['Rows'] = $rs[1];
        
        //View
        $this->view('menu/Editar');
        
    }
    
    public function Delete($pr = '') {
        $_SESSION['ID']  = $pr;
        
        //Abrir o Modelo
        $this->Model('tb_menu');
        $cm = new tb_menu();
        
        $GLOBALS['msg'] = $cm->Delete($_SESSION['ID']);

       //View
        $this->view('menu/delete');
    }
}