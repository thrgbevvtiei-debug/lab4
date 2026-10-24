<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    // Зведена статистика: ?type=page або ?type=ip
    public function pages(Request $request)
    {
        $type = $request->query('type', 'page');

        if (!in_array($type, ['page', 'ip'], true)) {
            abort(400, 'Невідомий тип групування.');
        }

        $rows = Tracker::query()
            ->selectRaw("{$type}, count(*) as hits, count(distinct ip) as visitors, max(visited_at) as last_visit")
            ->groupBy($type)
            ->orderByDesc('hits')
            ->get();

        return view('stats.pages', compact('rows', 'type'));
    }

    // Детальна статистика з пагінацією: ?type=page&item=/cars
    public function detail(Request $request)
    {
        $type = $request->query('type', 'page');
        $item = $request->query('item');

        if (!in_array($type, ['page', 'ip'], true)) {
            abort(400, 'Невідомий тип фільтрації.');
        }

        $rows = Tracker::query()
            ->when($item, fn ($query, $value) => $query->where($type, $value))
            ->orderByDesc('visited_at')
            ->paginate(15)
            ->withQueryString();

        return view('stats.detail', compact('rows', 'type', 'item'));
    }

    // Додатковий показник: найпопулярніші авто та регіони (з JSON-поля extra)
    public function popular()
    {
        $cars = Tracker::query()
            ->where('route_name', 'cars.show')
            ->whereNotNull('extra')
            ->get()
            ->groupBy(fn ($row) => $row->extra['object_label'] ?? '—')
            ->map->count()
            ->sortDesc()
            ->take(10);

        $regions = Tracker::query()
            ->where('route_name', 'countries.index')
            ->whereNotNull('extra')
            ->get()
            ->filter(fn ($row) => isset($row->extra['filters']['region']))
            ->groupBy(fn ($row) => $row->extra['filters']['region'])
            ->map->count()
            ->sortDesc();

        return view('stats.popular', compact('cars', 'regions'));
    }
}
