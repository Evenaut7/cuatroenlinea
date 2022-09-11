<?php

namespace App;

class Ficha {

    private $color;

    public function __construct($elegircolor) {
        $this->color = $elegircolor;
    }

    public function mostrar_ficha() {
        return $this->color;
    }

}

?>