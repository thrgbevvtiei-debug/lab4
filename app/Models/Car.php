<?php

namespace App\Models;

use App\Enums\FuelType;
use App\Enums\Transmission;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'mileage',
        'fuel_type',
        'transmission',
        'color',
    ];

    protected $casts = [
        'year'         => 'integer',
        'price'        => 'decimal:2',
        'mileage'      => 'integer',
        'fuel_type'    => FuelType::class,
        'transmission' => Transmission::class,
    ];
}
