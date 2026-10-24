@extends('layouts.app')

@section('title', 'Детальна статистика')

@section('content')
    <h1 class="h3 mb-3">Детальна статистика</h1>

    <p>
        Фільтр: <strong>{{ $type }}</strong> = <strong>{{ $item ?? 'усі' }}</strong>
        <a href="{{ route('stats.pages', ['type' => $type]) }}" class="ms-3">← Назад до зведення</a>
    </p>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle border">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Дата і час</th>
                <th>Сторінка</th>
                <th>Метод</th>
                <th>Маршрут</th>
                <th>IP</th>
                <th>Код</th>
                <th>User-Agent</th>
                <th>Extra (JSON)</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($rows as $i => $row)
                <tr>
                    <td>{{ $rows->firstItem() + $i }}</td>
                    <td>{{ $row->visited_at->format('d.m.Y H:i:s') }}</td>
                    <td>{{ $row->page }}</td>
                    <td>{{ $row->method }}</td>
                    <td>{{ $row->route_name ?? '—' }}</td>
                    <td>{{ $row->ip }}</td>
                    <td>{{ $row->status }}</td>
                    <td class="small">{{ \Illuminate\Support\Str::limit($row->user_agent, 40) }}</td>
                    <td class="small">{{ $row->extra ? json_encode($row->extra, JSON_UNESCAPED_UNICODE) : '—' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $rows->links() }}
    </div>
@endsection
