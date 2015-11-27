<?php
/*
 * Controller index
 */
class pessoauser extends Controller {
    public function index() {
            //Abrir o Modelo
        $this->Model('v_pessoauser');
        $cm = new v_pessoauser();
        
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
        
        $this->view('pessoauser/Lista');
    }
    
}
