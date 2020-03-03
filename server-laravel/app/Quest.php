<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'description'
    ];
}
