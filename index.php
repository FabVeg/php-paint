<?php

require_once "classes/Shape.class.php";
require_once "classes/Rectangle.class.php";
require_once "classes/Triangle.class.php";
require_once "classes/Circle.class.php";
require_once "classes/Ellipse.class.php";
require_once "classes/Square.class.php";

$svg = "";

/*
   Objects List :
    Rectangle
    Square
    Ellipse
    Circle
    Triangle
 */


$rectangle = new Rectangle();
$rectangle->setSize(200,100);


$svg .= $rectangle->draw();


$square = new Square();
$square->setSize(100,100);

$svg .= $square->draw();


$circle = new Circle();
$circle->setSize(400,400);

$svg .= $circle->draw();

$triangle = new Triangle();
$triangle->setSize(400,400);

$svg .= $triangle->draw();

$ellipse = new Ellipse();
$ellipse->setSize(400,400);

$svg .= $ellipse->draw();







include "vue.phtml";