<pre>
<?php

class Pessoa {

    public $nome;
    public $cpf;
    public $rg;

    public function falar() {
        return "O meu nome é " . $this->nome . " cpf " . $this->cpf . " rg " . $this->rg;
    }

    function __construct($n, $c, $r) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->rg = $r;
    }
    
    function getNome() {
        return $this->nome;
    }
    function setNome($n) {
        $this->nome = $n;
    }
    
    function getCpf() {
        return $this->cpf;
    }
    function setCpf($c) {
        $this->cpf = $c;
    }
    
    function getRg() {
        return $this->rg;
    }
    function setRg($r) {
        $this->rg = $r;
    }
    
}




$ob1 = new Pessoa("felipe", "00000000000", "00000000000");

//$ob1->nome = "felipe";
var_dump($ob1);


echo "<br>";

echo $ob1->falar();

?>
</pre>