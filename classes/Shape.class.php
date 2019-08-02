<?php



class Shape {

   
    private $width;
    private $height;
    public $color;
    public $opacity;
    public $x;
    public $y;
    
    
    
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

}