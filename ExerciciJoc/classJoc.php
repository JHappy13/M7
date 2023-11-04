<?php
    abstract class Joc{
        private int $actualHP;
        private int $initialHP;
        private int $record=0;

        public function __construct($initHP)
        {
            if($initHP<=10){
                $this->initialHP = $initHP;
            }else{
                $this->initialHP = 10;
            }
        }

        public function mostraVidesRestants()
        {
            echo "Et queden ". $this->actualHP ." hp";
        }

        public function treuVida(): bool
        {
            if($this->actualHP-1 > 0){
                $vida = $this-> actualHP;
                $this-> actualHP = $vida - 1;
                return true;
            }else{
                return false;
            }
        }

        public function reiniciaPartida()
        {
            $this->actualHP = $this->initialHP;
        }

        public function actualizaRecord()
        {
            if ($this->record < $this->actualHP) {
                $this->record=$this->actualHP;
                echo "Has superat el teu record";
            }else if ($this->record == $this->actualHP) {
                echo "S'ha aconseguit el record";
            }
        }

        abstract public function juga();
    }
?>