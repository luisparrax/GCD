<?php


class Seguridad
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function limpiar($cad)
    {
        return strip_tags($cad);
    }
}