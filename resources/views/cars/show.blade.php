@extends('layouts.app')

@section('title', $car->brand . ' ' . $car->model)

@section('content')
    <h1 class="h3 mb-3">{{ $car->brand }} {{ $car->model }}</h1>

    <p><strong>Рік випуску:</strong> {{ $car->year }}</p>
    <p><strong>Ціна:</strong> {{ number_format($car->price, 0, '.', ' ') }} $</p>
    <p><strong>Пробіг:</strong> {{ number_format($car->mileage, 0, '.', ' ') }} км</p>
    <p><strong>Тип палива:</strong> {{ $car->fuel_type->value }}</p>
    <p><strong>Коробка передач:</strong> {{ $car->transmission->value }}</p>
    <p><strong>Колір:</strong> {{ $car->color ?? '—' }}</p>

    <div class="d-flex gap-2 mt-3">
        <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">Редагувати</a>

        <form method="POST" action="{{ route('cars.destroy', $car) }}"
              onsubmit="return confirm('Видалити це авто?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Видалити</button>
        </form>

        <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Повернутися до списку</a>
    </div>
@endsection
