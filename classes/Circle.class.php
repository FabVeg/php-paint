<?php



class Circle {

   
    public $r;
    public $color;
    public $opacity;
    public $cx;
    public $cy;

  
    /**
     * Cette fonction d'encapsulation permet de définir de manière sécurisé les propriété du triangle
     * @param $width int largeur en pixel du triangle
     * @param $height int hauteur en pixel du triangle
     */

    public function setSize($width, $height){
        $this->width = intval($width);
        $this->height = intval($height);
    }

    public function draw(){
        return '<circle cx="300" cy="250" r="180" fill="gold" opacity="0.33"></circle>';
    }

}
    