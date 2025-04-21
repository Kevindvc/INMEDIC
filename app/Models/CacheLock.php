<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CacheLock extends Model
{
    protected $table = 'cache_locks';

    protected $fillable = [
        'key',
        'owner',
        'expiration'
    ];

    public $timestamps = false;
}