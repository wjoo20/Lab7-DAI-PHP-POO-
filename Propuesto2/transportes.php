<?php
class Transportes{
    private $destinatario;
    private $destino;
    private $tarifa;
    private $tm;

    function Transportes($destinatario, $destino, $tm){
        $this->destinatario = $destinatario;
        $this->destino = $destino;
        $this->tm = $tm;
        $this->tarifa = 150;
    }
    public function setDestinatario($destinatario)
    {
        $this->destinatario=$destinatario;
    }
    public function getDestinatario()
    {
        return $this->destinatario;
    }
    public function setDestino($destino)
    {
        $this->destino=$destino;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function setTarifa($tarifa)
    {
        $this->tarifa=$tarifa;
    }
    public function getTarifa()
    {
        return $this->tarifa;
    }
    public function setTM($tm)
    {
        $this->tm=$tm;
    }
    public function getTM()
    {
        return $this->tm;
    }
    public function flete(){
        return ($this->tarifa)*($this->tm);
    }
}
?>