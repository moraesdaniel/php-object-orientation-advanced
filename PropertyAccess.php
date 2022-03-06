<?php

trait PropertyAccess {
    public function __set($attributeName, $value)
    {
        $method = "set" . ucfirst($attributeName);
        return $this->$method($value);
    }
}