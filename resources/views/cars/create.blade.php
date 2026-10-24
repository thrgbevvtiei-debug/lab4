@extends('layouts.app')

@section('title', 'Додати авто')

@section('content')
    <h1 class="h3 mb-3">Додати автомобіль</h1>
    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        @include('cars._form')
        <button type="submit" class="btn btn-primary">Зберегти</button>
        <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Скасувати</a>
    </form>
@endsection
