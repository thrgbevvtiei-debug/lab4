<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $table = 'tracker';

    public $timestamps = false;

    protected $fillable = [
        'page',
        'ip',
        'status',
        'method',
        'route_name',
        'user_agent',
        'extra',
        'visited_at',
    ];

    protected function casts(): array
    {
        return [
            'visited_at' => 'datetime',
            'extra'      => 'array',
        ];
    }
}
