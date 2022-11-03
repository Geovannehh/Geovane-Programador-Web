<?php
class fruta{
    protected $nome;//private e protected 
    //public-acssivel em qualquer lugar
    //protect-pode ser acessado apenas dentro
    //da classe e por classes derivadas(filhas)
    //private-so pode ser acessado denro da classe


    function _construct($nome,$cor) //construtor e chamado quando se faz uma nova instancia de classes
    {
        $this->nome=$nome; //a palavra $this refere-se a propriedade da propia classe
        $this->cor=$cor;

    }

    final function qualquer(){ //final-pode ser usada em ambas. 
        //a palavra chave final, evita que esse metodo seja reescrito nas classes filhas se utilizada na classe, evita que a classe seja herdada
        public $cor;
        echo 'qualquer';
    }

    public function intro(){
        echo "Eu sou uma $this->nome";

    }

    function set_nome($nome){ //funcoes/metodos setters saao usados para atribuir valores
        $this->nome=$nome;

    }

    function get_nome(){ //funcoes/metodos getters sao usados para retornar um valor
        return $this->nome;

    }

    function set_cor($cor){
        $this->cor=$cor;

    }

    function set_cor(){
        return $this->cor;

    }   

    const AGRADECER="obrigado";

}