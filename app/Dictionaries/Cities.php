<?php


namespace App\Dictionaries;


class Cities extends BaseDictionary
{
    public function __construct()
    {
        parent::__construct('cities');
    }

    public static function make(): self
    {
        return new static();
    }
}