<?php

class Controller extends db {
    
    public function getSystem(){
      $_SESSION['Titulo'] = $this->titulo;
      $_SESSION['Versao'] = $this->versao;  
    }
    
    protected function view($n_view){
        $this->getSystem();
        return require_once 'app/views/'.$n_view.'.php';   
    
    }
    protected function Model($n_model){
        return require_once 'app/models/'.$n_model.'.php';   
    
    }
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    # FUNÇÃO de Mensagem
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    protected function mensagem($texto){
        return '<div class="alert alert-success" role="alert">'.$texto.'</div>';
    }
    
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    # FUNÇÃO de Converter data simpes
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    public function converter_datas($strData) {
      # Recebemos a data no formato: dd/mm/aaaa
      # Convertemos a data para o formato: aaaa-mm-dd
      if ( preg_match('#/#',$strData) == 1 ) {
           $strDataFinal = implode('-', array_reverse(explode('/',$strData)));
         }
      return  date('Y-m-d', strtotime($strDataFinal));
    }
    
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    #Formata Decimal para moeda Brasil
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    public function format_moeda($valor){
        # Recebemos o Decimal no formato: 9,99
        # Convertemos o Decimal para o formato: R$ 9,99
        $vmoeda = "R$ ".number_format($valor,2,",",".");

        return $vmoeda;
    }
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    #Formata moeda por extenso
    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    public function Moeda_extenso($valor = 0, $maiusculas = false){

        $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
        $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
        "quatrilhões");

        $c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
        "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
        "sessenta", "setenta", "oitenta", "noventa");
        $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
        "dezesseis", "dezesete", "dezoito", "dezenove");
        $u = array("", "um", "dois", "três", "quatro", "cinco", "seis",
        "sete", "oito", "nove");

        $z = 0;
        $rt = "";

        $valor = number_format($valor, 2, ".", ".");
        $inteiro = explode(".", $valor);
        for($i=0;$i<count($inteiro);$i++)
        for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
        $inteiro[$i] = "0".$inteiro[$i];

        $fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
        for ($i=0;$i<count($inteiro);$i++) {
        $valor = $inteiro[$i];
        $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
        $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

        $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
        $ru) ? " e " : "").$ru;
        $t = count($inteiro)-1-$i;
        $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
        if ($valor == "000")$z++; elseif ($z > 0) $z--;
        if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
        if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
        ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
        }

        if(!$maiusculas){
            return($rt ? $rt : "zero");
        } else {

        if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
            return (($rt) ? ($rt) : "Zero");
        }

    }
    
}