<?php



class Rectangle {

   
    private $width;
    private $height;
    public $color;
    public $opacity;
    public $x;
    public $y;

  
    /**
     * Cette fonction d'encapsulation permet de définir de manière sécurisé les propriété du rectangle
     * @param $width int largeur en pixel du rectangle
     * @param $height int hauteur en pixel du rectangle
     */

    public function setSize($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    
    public function setPosition($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setOpacity($opacity){
        $this->opacity = $opacity;
    }

    public function draw(){
        return '<rect x="'. $this->x .'" y="'. $this->y .'" width="'. $this->width .'" height="'. $this->height .'" fill="'. $this->color .'" opacity="'. $this->opacity .'"></rect>';
    }

}
    