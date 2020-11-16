<?php
require 'transportes.php';
class Leonidas extends Transportes{
    public function calcularTarifa(){
        if($this->getDestino() === "Arequipa" or $this->getDestino() === "Ilo" or $this->getDestino() === "Tacna"){
            $this->setTarifa(200);
        }
        else{
            if($this->getDestino() === "Piura" or $this->getDestino() === "Tumbes" or $this->getDestino() === "Cajamarca"){
                $this->setTarifa(220);
            }else{
                $this->setTarifa(150);
            }
        }
    }
    public function seguro(){
        return 0.05*($this->flete());
    }
    public function monto(){
        return ($this->flete())+($this->seguro());
    }
}
?>
