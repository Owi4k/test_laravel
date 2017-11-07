<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'id', 'word', 'translate'
    ];

    public function dictionary()
    {
        return $this->belongsTo(Dictionary::class, 'dictionary_id');
    }
}
