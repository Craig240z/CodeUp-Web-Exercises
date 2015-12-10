<?php

class Rectangle {
    protected $height;
    protected $width;

    public function __construct($height, $width) {
        $this->setheight($height);
        $this->setwidth($width);
    }

    protected function setheight($height) {
        $this->height = $height;
    }
    protected function setwidth($width) {
        $this->width = $width;
    }

    public function getheight() {
        return $this->height;
    }
    public function getwidth() {
        return $this->width;
    }
    public function area() {
        return $this->height * $this->width;
    }
    public function perimeter() {
       
        return ($this->width * 2) + ($this->height * 2);
    }
}