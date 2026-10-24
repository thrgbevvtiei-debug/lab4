@extends('layouts.app')

@section('title', $country->name)

@section('content')
    <h1 class="h3 mb-3">{{ $country->name }}</h1>

    <p><strong>Код країни:</strong> {{ $country->code }}</p>
    <p><strong>Столиця:</strong> {{ $country->capital }}</p>
    <p><strong>Телефонний код:</strong> {{ $country->phone_code }}</p>
    <p><strong>Регіон:</strong> {{ $country->region }}</p>

    <div class="d-flex gap-2 mt-3">
        <a href="{{ route('countries.edit', $country) }}" class="btn btn-primary">Редагувати</a>

        <form method="POST" action="{{ route('countries.destroy', $country) }}"
              onsubmit="return confirm('Видалити цю країну?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Видалити</button>
        </form>

        <a href="{{ route('countries.index') }}" class="btn btn-outline-secondary">Повернутися до списку</a>
    </div>
@endsection
