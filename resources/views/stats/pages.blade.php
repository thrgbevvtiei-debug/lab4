@extends('layouts.app')

@section('title', 'Статистика відвідувань')

@section('content')
    <h1 class="h3 mb-3">Статистика за {{ $type === 'page' ? 'сторінками' : 'IP-адресами' }}</h1>

    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('stats.pages', ['type' => 'page']) }}"
           class="btn btn-sm {{ $type === 'page' ? 'btn-primary' : 'btn-outline-primary' }}">За сторінками</a>
        <a href="{{ route('stats.pages', ['type' => 'ip']) }}"
           class="btn btn-sm {{ $type === 'ip' ? 'btn-primary' : 'btn-outline-primary' }}">За IP-адресами</a>
        <a href="{{ route('stats.popular') }}" class="btn btn-sm btn-outline-success">Популярні авто та регіони</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle border">
            <thead class="table-dark">
            <tr>
                <th>{{ $type === 'page' ? 'Сторінка' : 'IP-адреса' }}</th>
                <th>Звернень</th>
                <th>Унікальних IP</th>
                <th>Останній візит</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($rows as $row)
                <tr>
                    <td>
                        <a href="{{ route('stats.detail', ['type' => $type, 'item' => $row->{$type}]) }}">
                            {{ $row->{$type} }}
                        </a>
                    </td>
                    <td>{{ $row->hits }}</td>
                    <td>{{ $row->visitors }}</td>
                    <td>{{ \Carbon\Carbon::parse($row->last_visit)->format('d.m.Y H:i:s') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Даних ще немає.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
