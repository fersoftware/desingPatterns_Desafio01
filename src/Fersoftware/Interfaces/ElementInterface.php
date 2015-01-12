<?php

namespace Fersoftware\Interfaces;

interface ElementInterface
{
    public function setId($id);
    public function setName($name);
    public function setType($type);
    public function setLabel($type);
    public function setValue($value);
    public function setPlaceHolder($placeHolder);
    public function getElement();
}