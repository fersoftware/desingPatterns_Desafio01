<?php
namespace Fersoftware\Form;
use Fersoftware\Interfaces\ElementInterface;

class Element implements ElementInterface
{
    public $element;
    public $id;
    public $name;
    public $type;
    public $label;
    public $value;
    public $placeHolder;

    public function getElement()
    {
        return $this->element;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getPlaceHolder()
    {
        return $this->placeHolder;
    }

    public function setLabel($label)
    {

        $this->label = '<label class="control-label" for="inputEmail">'.$label.'</label>';
        return $this;
    }

    public function setElement($element)
    {
        $buildElement = '';
        if($element == 'input')
        {
            $buildElement = $this->getLabel(). '<div class="controls"><input '.
                $this->getType().
                $this->getId().
                $this->getName().
                $this->getPlaceHolder(). '/></div>';
        }
        $this->element = $buildElement;
        return $this;
    }

    public function setId($id)
    {
        $this->id = " id = '" . $id . "'";
        return $this;
    }

    public function setName($name)
    {
        $this->name = " name = '" . $name . "'";
        return $this;
    }

    public function setType($type)
    {
        $buidElement = '';
        if($type == 'text')
        {
            $buidElement = " type='text' ";
        }
        if($type == 'radio')
        {
            $buidElement = " type='radio' ";
        }
        $this->type = $buidElement;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setPlaceHolder($placeHolder)
    {
        $this->placeHolder = " placeholder = '" . $placeHolder . "'";
        return $this;
    }

    public function addElement($id,$label,$name,$placeholder,$element,$type)
    {
        $this->setId($id)
            ->setType($type)
            ->setName($name)
            ->setPlaceHolder($placeholder)
            ->setLabel($label)
            ->setElement($element);

        return $this->getElement();
    }
}