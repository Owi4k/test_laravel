<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $fillable = [
        'id', 'name'
    ];

    public function words()
    {
        return $this->hasMany(Word::class, 'dictionary_id');
    }
}
