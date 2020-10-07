<?php

namespace Sammyjo20\Jockey\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineMailable extends Model
{
    /**
     * @var string[]
     */
    public $timestamps = [
        'created_at',
        'updated_at',
        'expires_at'
    ];
}
