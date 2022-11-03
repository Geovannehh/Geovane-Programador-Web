<?php
require_once 'animal.php'
require_once 'terresatre.php';
 //indicar qual o arquivo que contem a classe que sera
//utilizada para heranca
    class gato extends animal{
        public function fazBarulho() //implementar obrigatoriamente o metodo vindo da classe pai
        {
            echo "miau";

        }

        public function locomove() //implementar obrigatoriamente o metodo vindo da interface
        {
            echo "andando"
        }
    }






?>