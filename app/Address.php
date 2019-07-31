<?php

namespace App;

use App\Dictionaries\Areas;
use App\Dictionaries\Cities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $guarded = [];

    public static function make(): self
    {
        return new static();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function add(array $attributes)
    {
        $this->fill($attributes);
        $this->save();
    }

    public function getFullAddress()
    {
        $area = Areas::make()->findById($this->area_id)->name;
        $city = Cities::make()->findById($this->city_id)->name;

        return "{$area}, {$city}, {$this->street}, {$this->house}";
    }
}
