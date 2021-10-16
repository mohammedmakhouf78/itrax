<?php


class Shape
{
    public $name;
    public $color;

    protected function area($w,$l)
    {
        return $w * $l;
    }

}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function getArea()
    {
        $area = $this->area($this->length,$this->width);
        if($area > 50)
        {
            return $area;
        }else{
            echo "Error";
        }
    }


}

class Square extends Shape
{
    public $length;
}


$rect1 = new Rectangle();
// $rect1->length = 20;
// $rect1->width = 40;
// echo $rect1->getArea();

