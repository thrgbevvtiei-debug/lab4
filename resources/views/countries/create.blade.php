@extends('layouts.app')

@section('title', 'Додати країну')

@section('content')
    <h1 class="h3 mb-3">Додати країну</h1>
    <form method="POST" action="{{ route('countries.store') }}">
        @csrf
        @include('countries._form')
        <button type="submit" class="btn btn-primary">Зберегти</button>
        <a href="{{ route('countries.index') }}" class="btn btn-outline-secondary">Скасувати</a>
    </form>
@endsection
