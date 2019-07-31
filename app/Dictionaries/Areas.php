<?php


namespace App\Dictionaries;


class Areas extends BaseDictionary
{
    public function __construct()
    {
        parent::__construct('areas');
    }

    public static function make(): self
    {
        return new static();
    }
}