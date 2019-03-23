<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use SoftDeletes;

    protected $fillable = ['status', 'username', 'topic_id'];

    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at'
    ];
}
