<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            ['brand' => 'Audi',          'model' => 'A4',       'year' => 2019, 'price' => 24500, 'mileage' => 98000,  'fuel_type' => 'Дизель', 'transmission' => 'Автомат',  'color' => 'Чорний'],
            ['brand' => 'Audi',          'model' => 'Q5',       'year' => 2021, 'price' => 38900, 'mileage' => 45000,  'fuel_type' => 'Бензин', 'transmission' => 'Автомат',  'color' => 'Білий'],
            ['brand' => 'Audi',          'model' => 'A6',       'year' => 2017, 'price' => 21000, 'mileage' => 150000, 'fuel_type' => 'Дизель', 'transmission' => 'Автомат',  'color' => 'Сірий'],
            ['brand' => 'BMW',           'model' => '320d',     'year' => 2018, 'price' => 23000, 'mileage' => 120000, 'fuel_type' => 'Дизель', 'transmission' => 'Автомат',  'color' => 'Синій'],
            ['brand' => 'BMW',           'model' => 'X5',       'year' => 2020, 'price' => 52000, 'mileage' => 60000,  'fuel_type' => 'Дизель', 'transmission' => 'Автомат',  'color' => 'Чорний'],
            ['brand' => 'Mercedes-Benz', 'model' => 'C200',     'year' => 2019, 'price' => 29500, 'mileage' => 85000,  'fuel_type' => 'Бензин', 'transmission' => 'Автомат',  'color' => 'Сріблястий'],
            ['brand' => 'Mercedes-Benz', 'model' => 'E220',     'year' => 2016, 'price' => 22000, 'mileage' => 175000, 'fuel_type' => 'Дизель', 'transmission' => 'Автомат',  'color' => 'Чорний'],
            ['brand' => 'Toyota',        'model' => 'Camry',    'year' => 2020, 'price' => 27500, 'mileage' => 55000,  'fuel_type' => 'Бензин', 'transmission' => 'Автомат',  'color' => 'Білий'],
            ['brand' => 'Toyota',        'model' => 'RAV4',     'year' => 2022, 'price' => 36500, 'mileage' => 28000,  'fuel_type' => 'Гібрид', 'transmission' => 'Автомат',  'color' => 'Червоний'],
            ['brand' => 'Volkswagen',    'model' => 'Passat',   'year' => 2015, 'price' => 12500, 'mileage' => 210000, 'fuel_type' => 'Дизель', 'transmission' => 'Механіка', 'color' => 'Сірий'],
            ['brand' => 'Volkswagen',    'model' => 'Golf',     'year' => 2018, 'price' => 15800, 'mileage' => 112000, 'fuel_type' => 'Бензин', 'transmission' => 'Механіка', 'color' => 'Синій'],
            ['brand' => 'Skoda',         'model' => 'Octavia',  'year' => 2019, 'price' => 16900, 'mileage' => 95000,  'fuel_type' => 'Дизель', 'transmission' => 'Механіка', 'color' => 'Зелений'],
            ['brand' => 'Tesla',         'model' => 'Model 3',  'year' => 2021, 'price' => 33000, 'mileage' => 40000,  'fuel_type' => 'Електро', 'transmission' => 'Автомат', 'color' => 'Білий'],
            ['brand' => 'Hyundai',       'model' => 'Tucson',   'year' => 2020, 'price' => 24800, 'mileage' => 67000,  'fuel_type' => 'Бензин', 'transmission' => 'Автомат',  'color' => 'Сірий'],
            ['brand' => 'Ford',          'model' => 'Focus',    'year' => 2014, 'price' => 8900,  'mileage' => 189000, 'fuel_type' => 'Бензин', 'transmission' => 'Механіка', 'color' => 'Червоний'],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
