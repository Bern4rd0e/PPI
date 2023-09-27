<?php
    class Computador{

        private $processador;
        private $ram;
        private $armazenamento;

        public function getRam(){
            return $this->ram; // $this -> tira a ambiguidade

        }

        public function setRam($ram){
            $this->ram = $ram; // é usado para recuperar recursos
        }
 
        public function getProcessador()
        {
                return $this->processador;
        }

        public function setProcessador($processador)
        {
                $this->processador = $processador;

                return $this;
        }

        public function getArmazenamento()
        {
                return $this->armazenamento;
        }

        public function setArmazenamento($armazenamento)
        {
                $this->armazenamento = $armazenamento;

                return $this;
        }
    }

    ?>