<?php

namespace App\Enums;

enum FuelType: string
{
    case Petrol   = 'Бензин';
    case Diesel   = 'Дизель';
    case Hybrid   = 'Гібрид';
    case Electric = 'Електро';
}
