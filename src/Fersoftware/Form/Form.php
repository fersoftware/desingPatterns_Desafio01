<?php
namespace Fersoftware\Form;

use Fersoftware\Interfaces\FormInterface;
use Fersoftware\Element;

class Form implements FormInterface
{
    public $action;
    public $method;
    public $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setAction($action)
    {
        $this->action = " action='" . $action . "'";
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = " method = '" . strtoupper($method) . "'";
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    public function render($elementArr)
    {
        $buildForm = '<div class="navbar-inner">';
        $buildForm .= '<form  class="navbar-form pull-left" ' . $this->getAction() . $this->getMethod() . '>';
        $buildForm .= ' <div style="margin-left: 116px;" class="control-group">';
        $buildForm .= '<h2>'.$this->getTitle().'</h2>';
        $buildForm .= ' </div>';
        $buildForm .= ' <div class="control-group">';
        foreach($elementArr as $el)
        {
            $buildForm .= $el->getElement() .'<br>';
        }
        $buildForm .= ' </div>';
        $buildForm .= '<div class="control-group">';
        $buildForm .= '<div class="controls">';
        $buildForm .= '<input type="submit" class="btn" value="Submit">';
        $buildForm .= ' </div>';
        $buildForm .= ' </div>';
        $buildForm .= '</form>';
        $buildForm .= ' </div>';
        echo $buildForm;
    }
    public function OptionForm($title,$action,$method)
    {
        $this->setTitle($title)
            ->setAction($action)
            ->setMethod($method);
        return $this;
    }
}