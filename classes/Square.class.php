<?php



class Square {
    
    protected $srx;
    protected $sry;
   
    public $color;
    public $opacity;
    public $x;
    public $y;

  
    /**
     * Cette fonction d'encapsulation permet de définir de manière sécurisé les propriété du carré
     * @param $width int largeur en pixel du carré
     * @param $height int hauteur en pixel du carré
     */

    public function setSize($width, $height = null ){
        $this->width = $width;
        $this->height = $width;
    }

    public function draw(){
        return '<rect x="'. $this->x .'" y="'. $this->y .'" width="'. $this->width .'" height="'. $this->width .'" fill="'. $this->color .'" opacity="'. $this->opacity .'"></rect>';
    }

}
    