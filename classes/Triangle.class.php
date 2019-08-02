<?php



class Triangle {

   
    private $width;
    private $height;
    public $color;
    public $opacity;
    public $x;
    public $y;

  
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
        return '<polygon points="60 60,200 250,60 250" fill="purple" opacity="0.75"></polygon>';
    }

}
    