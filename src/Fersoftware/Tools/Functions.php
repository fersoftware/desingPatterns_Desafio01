<?php
namespace Fersoftware\Tools;
use Fersoftware\Element;
class Functions
{
    public  static function newElement($id,$label,$name,$placeholder,$element,$type)
    {
        $addElement = new Element();
        $addElement->addElement($id,$label,$name,$placeholder,$element,$type);
        return $addElement;
    }
}