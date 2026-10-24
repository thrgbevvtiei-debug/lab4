@extends('layouts.app')

@section('title', 'Редагування авто')

@section('content')
    <h1 class="h3 mb-3">Редагування: {{ $car->brand }} {{ $car->model }}</h1>
    <form method="POST" action="{{ route('cars.update', $car) }}">
        @csrf
        @method('PUT')
        @include('cars._form')
        <button type="submit" class="btn btn-primary">Зберегти зміни</button>
        <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Скасувати</a>
    </form>
@endsection
