@extends('layouts.app')

@section('title', 'Країни')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Довідник країн</h1>
        <a href="{{ route('countries.create') }}" class="btn btn-primary">+ Додати країну</a>
    </div>

    <form method="GET" action="{{ route('countries.index') }}" class="row g-2 mb-3">
        <div class="col-auto">
            <select name="region" class="form-select">
                <option value="">Усі регіони</option>
                @foreach ($regions as $region)
                    <option value="{{ $region }}" @selected(request('region') === $region)>{{ $region }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-secondary">Фільтрувати</button>
            @if (request()->filled('region'))
                <a href="{{ route('countries.index') }}" class="btn btn-outline-secondary">Скинути</a>
            @endif
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle border">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Назва</th>
                <th>Столиця</th>
                <th>Тел. код</th>
                <th>Регіон</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($countries as $i => $country)
                <tr>
                    <td>{{ $countries->firstItem() + $i }}</td>
                    <td>{{ $country->code }}</td>
                    <td>
                        <a href="{{ route('countries.show', $country) }}" class="fw-bold text-decoration-none">
                            {{ $country->name }}
                        </a>
                    </td>
                    <td>{{ $country->capital }}</td>
                    <td>{{ $country->phone_code }}</td>
                    <td>{{ $country->region }}</td>
                    <td>
                        <a href="{{ route('countries.edit', $country) }}" class="btn btn-sm btn-outline-primary">Редагувати</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">Країни не знайдено.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $countries->links() }}
    </div>
@endsection
