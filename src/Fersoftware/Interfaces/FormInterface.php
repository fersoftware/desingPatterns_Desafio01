<?php
namespace Fersoftware\Interfaces;

interface FormInterface
{
    public function setTitle($action);
    public function setAction($action);
    public function setMethod($method);
    public function render($elementArr);
}