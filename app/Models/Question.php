<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        'choices' => 'json',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


}
