<?php
class Rectangulo {
    private $largo;
    private $ancho;

    public function __construct($largo, $ancho) {
        $this->setLargo($largo);
        $this->setAncho($ancho);
    }

    public function setLargo($largo) {
        if (!is_numeric($largo) || $largo <= 0) {
            throw new Exception("El largo debe ser un número positivo.");
        }
        $this->largo = $largo;
    }

    public function setAncho($ancho) {
        if (!is_numeric($ancho) || $ancho <= 0) {
            throw new Exception("El ancho debe ser un número positivo.");
        }
        $this->ancho = $ancho;
    }

    public function getLargo() {
        return $this->largo;
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largo + $this->ancho);
    }

    public function calcularArea() {
        return $this->largo * $this->ancho;
    }
}
?>
