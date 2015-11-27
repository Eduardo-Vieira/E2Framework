<?php

/*
 * Controller Login
 */
class login extends Controller {
    public function index() {  
            $this->view('login');
    }
    
    public function sair(){
        unset($_SESSION['SENHA']);
        unset($_SESSION['USUARIIONAME']);
        unset($_SESSION['USER']);
        header("Location:index.php");
    }

    public function autentica(){
        //Abrir o Modelo
        $this->Model('tb_usuarioLogin');
        $cm = new tb_usuarioLogin();
        
        if(isset($_POST['bntLogin'])){
            
            $_SESSION['ID'] = array(
                                     '3',
                                     $_POST['InputEmail']
                                     );
            //Abrir select pelo modelo
            $rs = $cm->Select($_SESSION['ID']);
            
            if($rs[1][0][5] == md5($_POST['Inputpassword'])){
                $_SESSION['SENHA'] = $rs[1][0][5];
                $_SESSION['USUARIIONAME'] = $rs[1][0][1];
                $_SESSION['USER'] = $rs[1][0][3];
                header("Location:index.php");
                
            }else{
               $this->view('erroLogin'); 
            }
            
        }
    }
}