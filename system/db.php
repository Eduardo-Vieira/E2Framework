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
        
        $sql = "SELECT ".implode(",",$this->c['Coluna'])." FROM ".$this->c['Tabela'];
        
        $sql .= ($dados != null ? " WHERE ".$this->c['Coluna'][$dados[0]]." like '%".$dados[1]."%'" : null);
                      
        $n_rows = $this->Db()->query($sql)->rowCount();
        $rs = $this->Db()->query($sql)->fetchAll(PDO::FETCH_NUM);
        
        return array($n_rows,$rs);   
       
    }
    // INSERT INTO
    public function Insert($dados=''){
        
        $sql  = "INSERT INTO ".$this->c['Tabela']."(";
        $sql .= implode(",",$this->c['Coluna']).")";
        $sql .= " VALUE (0,".$dados.")"; 
        
        $this->Db()->exec($sql);       
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
        $sql .= " WHERE ".$this->c['Coluna'][0]." = ".$dados[0];
        
        $this->Db()->exec($sql);
        return $this->mensagem("Registro Salvo Com Sucesso!");
    }
    //DELETE
    public function Delete($dados=''){
        $sql  =  "DELETE FROM ".$this->c['Tabela'];
        $sql .= " WHERE ".$this->c['Coluna'][0]." = ".$dados;                 
        
        $this->Db()->exec($sql);
        return $this->mensagem("Registro Deletado Com Sucesso!");
    }
    
}