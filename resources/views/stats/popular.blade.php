@extends('layouts.app')

@section('title', 'Популярні авто та регіони')

@section('content')
    <h1 class="h3 mb-3">Популярні авто та регіони</h1>

    <p>
        <a href="{{ route('stats.pages') }}">← Назад до статистики</a>
    </p>

    <div class="row">
        <div class="col-md-6">
            <h2 class="h5">Найпопулярніші автомобілі (перегляди)</h2>
            <table class="table table-striped border">
                <thead class="table-dark">
                <tr><th>Авто</th><th>Переглядів</th></tr>
                </thead>
                <tbody>
                @forelse ($cars as $label => $count)
                    <tr><td>{{ $label }}</td><td>{{ $count }}</td></tr>
                @empty
                    <tr><td colspan="2" class="text-muted">Даних ще немає.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h2 class="h5">Використання фільтра за регіоном</h2>
            <table class="table table-striped border">
                <thead class="table-dark">
                <tr><th>Регіон</th><th>Разів</th></tr>
                </thead>
                <tbody>
                @forelse ($regions as $region => $count)
                    <tr><td>{{ $region }}</td><td>{{ $count }}</td></tr>
                @empty
                    <tr><td colspan="2" class="text-muted">Даних ще немає.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
