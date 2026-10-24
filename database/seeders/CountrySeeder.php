<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['code' => 'UA', 'name' => 'Україна',          'capital' => 'Київ',        'phone_code' => '+380', 'region' => 'Європа'],
            ['code' => 'PL', 'name' => 'Польща',           'capital' => 'Варшава',     'phone_code' => '+48',  'region' => 'Європа'],
            ['code' => 'DE', 'name' => 'Німеччина',        'capital' => 'Берлін',      'phone_code' => '+49',  'region' => 'Європа'],
            ['code' => 'FR', 'name' => 'Франція',          'capital' => 'Париж',       'phone_code' => '+33',  'region' => 'Європа'],
            ['code' => 'IT', 'name' => 'Італія',           'capital' => 'Рим',         'phone_code' => '+39',  'region' => 'Європа'],
            ['code' => 'ES', 'name' => 'Іспанія',          'capital' => 'Мадрид',      'phone_code' => '+34',  'region' => 'Європа'],
            ['code' => 'GB', 'name' => 'Велика Британія',  'capital' => 'Лондон',      'phone_code' => '+44',  'region' => 'Європа'],
            ['code' => 'CZ', 'name' => 'Чехія',            'capital' => 'Прага',       'phone_code' => '+420', 'region' => 'Європа'],
            ['code' => 'SK', 'name' => 'Словаччина',       'capital' => 'Братислава',  'phone_code' => '+421', 'region' => 'Європа'],
            ['code' => 'RO', 'name' => 'Румунія',          'capital' => 'Бухарест',    'phone_code' => '+40',  'region' => 'Європа'],
            ['code' => 'MD', 'name' => 'Молдова',          'capital' => 'Кишинів',     'phone_code' => '+373', 'region' => 'Європа'],
            ['code' => 'SE', 'name' => 'Швеція',           'capital' => 'Стокгольм',   'phone_code' => '+46',  'region' => 'Європа'],
            ['code' => 'NO', 'name' => 'Норвегія',         'capital' => 'Осло',        'phone_code' => '+47',  'region' => 'Європа'],
            ['code' => 'US', 'name' => 'США',              'capital' => 'Вашингтон',   'phone_code' => '+1',   'region' => 'Північна Америка'],
            ['code' => 'CA', 'name' => 'Канада',           'capital' => 'Оттава',      'phone_code' => '+1',   'region' => 'Північна Америка'],
            ['code' => 'MX', 'name' => 'Мексика',          'capital' => 'Мехіко',      'phone_code' => '+52',  'region' => 'Північна Америка'],
            ['code' => 'BR', 'name' => 'Бразилія',         'capital' => 'Бразиліа',    'phone_code' => '+55',  'region' => 'Південна Америка'],
            ['code' => 'AR', 'name' => 'Аргентина',        'capital' => 'Буенос-Айрес','phone_code' => '+54',  'region' => 'Південна Америка'],
            ['code' => 'JP', 'name' => 'Японія',           'capital' => 'Токіо',       'phone_code' => '+81',  'region' => 'Азія'],
            ['code' => 'CN', 'name' => 'Китай',            'capital' => 'Пекін',       'phone_code' => '+86',  'region' => 'Азія'],
            ['code' => 'IN', 'name' => 'Індія',            'capital' => 'Нью-Делі',    'phone_code' => '+91',  'region' => 'Азія'],
            ['code' => 'KR', 'name' => 'Південна Корея',   'capital' => 'Сеул',        'phone_code' => '+82',  'region' => 'Азія'],
            ['code' => 'TR', 'name' => 'Туреччина',        'capital' => 'Анкара',      'phone_code' => '+90',  'region' => 'Азія'],
            ['code' => 'EG', 'name' => 'Єгипет',           'capital' => 'Каїр',        'phone_code' => '+20',  'region' => 'Африка'],
            ['code' => 'AU', 'name' => 'Австралія',        'capital' => 'Канберра',    'phone_code' => '+61',  'region' => 'Океанія'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
