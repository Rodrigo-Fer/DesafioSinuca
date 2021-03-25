<?php

class  CadastroTime{
    public $conexao;
    public $banco;
    public $db;
    public $nometime;
    public $jogador1;
    public $jogador2;
   
    function __construct(){
        $conexao = mysql_pconnect("localhost","root","123456") or die (mysql_error());
        $banco = mysql_select_db("oo");
    }
    
    }
    function setCadastroTime(){
        $insertCadastroTime = mysql_query("insert into cadastrotime values(null,'$this->nometime','$this->jogador1', '$this->jogador2')");

        if($insertCadastroTime){
            $resposta="Inserido com sucesso";
        }else{
            $resposta ="Erro ao inserir";
        }
       
        return $resposta;
    }  
    function getCadastroTime(){
        while($l = mysql_fetch_array($getCadastroTime)){
            $this->nometime = $l["nometime"];
            $this->jogador1 = $l["jogador1"];
			$this->jogador2 = $l["jogador2"];
            print '<br>Nome:'.$this->nometime."<br>";
            print 'Jogador1: R$ '.$this->jogador1."<br>";
			print 'Jogador2: R$ '.$this->jogador2."<br>";
        }
    }