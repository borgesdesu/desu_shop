<?php

class Adress extends Model
{
    protected $id;
    protected $street;
    protected $number;
    protected $district;
    protected $className = self::class;

    function __construct($data = [])
    {
        $this->set($data);
    }

}