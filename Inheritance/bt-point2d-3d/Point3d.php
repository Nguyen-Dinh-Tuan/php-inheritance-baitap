<?php
include_once ('Point2d.php');

class Point3D extends Point2d
{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ(){
        $arr = array($this->x,$this->y,$this->z);
        foreach ($arr as $value){
            return  $value;
        }
    }
    public function toString()
    {
        return "($this->x,$this->y,$this->z)";
    }



}