<?php


namespace App\Dictionaries;


use Illuminate\Support\Facades\DB;

abstract class BaseDictionary
{
    protected $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function findById(int $id, array $attributes = ['*'])
    {
         return DB::table($this->table)
             ->select($attributes)
             ->where('id', $id)
             ->first();
    }
}