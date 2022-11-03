<?php
class morango extends fruta{
    //extends=heranca da classe desejada 
    public $peso; 
    //uma classse filhos pode ter propriedades proprias
    //herda todas as propriedade e metodos da classe pai
    function _construct($nome,$cor,$peso)
    //sobrescreve metodos da classe pai  eh possivel
    //com seus proprios argumentos

    {
        $this->nome=$nome;
        $this->cor=$cor;
        $this->peso=$peso;
    }

    function intro() //sobrescrever metodos da classe pai eh possivel
    {
        echo "Eu sou uma $this->nome";
    }

    public function mensagem(){
        echo "seila";
    
    }

}
?>