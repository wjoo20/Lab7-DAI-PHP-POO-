<?php
require 'transportes.php';
class IVOVIC extends Transportes{
    public function monto(){
        return ($this->flete());
    }
}
?>