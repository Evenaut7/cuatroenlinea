<?php

namespace App;

class ficha {

    protected $color;

    protected function __construct($elegircolor) {
        $this->color = $elegircolor;
    }

    public function mostrarcolor() {
        print $this->color;
    }

}

?>