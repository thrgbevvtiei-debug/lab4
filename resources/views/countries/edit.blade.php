@extends('layouts.app')

@section('title', 'Редагування країни')

@section('content')
    <h1 class="h3 mb-3">Редагування: {{ $country->name }}</h1>
    <form method="POST" action="{{ route('countries.update', $country) }}">
        @csrf
        @method('PUT')
        @include('countries._form')
        <button type="submit" class="btn btn-primary">Зберегти зміни</button>
        <a href="{{ route('countries.index') }}" class="btn btn-outline-secondary">Скасувати</a>
    </form>
@endsection
