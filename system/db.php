<?php

/* 
 * Class de conexao
 */

class db extends Config {
         
    public function Db(){
        $conn = new PDO($this->dns[$this->dbset]['dns'],$this->dns[$this->dbset]['User'] ,$this->dns[$this->dbset]['Senha']);     
        return $conn; 
    }
    
    //SELECT
    public function Select($dados=''){
       try {
        $sql = "SELECT ".implode(",",$this->c['Coluna'])." FROM ".$this->c['Tabela'];
        
        $sql .= ($dados != null ? " WHERE ".$this->c['Coluna'][$dados[0]]." LIKE :dados" : null);
                       
        $stmt = $this->Db()->prepare($sql);
        $stmt->bindValue(':dados','%'.$dados[1].'%');
        $stmt->execute();
               
        $n_rows = $stmt->rowCount();
        $rs = $stmt->fetchAll(PDO::FETCH_NUM);
        
        return array($n_rows,$rs);
        
        
       } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
       }     
    }
    // INSERT INTO
    public function Insert($dados=''){
        
        $sql  = "INSERT INTO ".$this->c['Tabela']."(";
        $sql .= implode(",",$this->c['Coluna']).")";
      
        $stmt = $this->Db()->prepare($sql.' VALUES(0,:dados)');
        $stmt->execute(array(
            ':dados' => $dados
        ));
 
        return $this->mensagem("Registro Salvo Com Sucesso!");
        
    }
    // UPDATE
    public function Update($dados=''){
        
        $tcol = count($this->c['Coluna']);
        
        $sql =  "UPDATE ".$this->c['Tabela']." SET ";
        for($i= 1; $i < $tcol; $i++){
            if($i!=$tcol-1){
               $sql .= $this->c['Coluna'][$i]."='".$dados[$i]."',";
            }else{
               $sql .= $this->c['Coluna'][$i]."='".$dados[$i]."'"; 
            }
        }      
        $stmt = $this->Db()->prepare($sql." WHERE ".$this->c['Coluna'][0]." = :id");  
        $stmt->execute(array(
                    ':id'=> $dados[0]
                ));

        
        return $this->mensagem("Registro Salvo Com Sucesso!");
    }
    //DELETE
    public function Delete($dados=''){
        $sql  =  "DELETE FROM ".$this->c['Tabela'];
        $sql .= " WHERE ".$this->c['Coluna'][0]." = :id";                 
        $stmt = $this->Db()->prepare($sql);
        $stmt->execute(array(
                    ':id'=> $dados[0]
                ));
        return $this->mensagem("Registro Deletado Com Sucesso!");
    }
    
}