<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use SoftDeletes;

    protected $fillable = ['username', 'content'];

    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}
