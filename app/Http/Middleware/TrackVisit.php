<?php

namespace App\Http\Middleware;

use App\Models\Tracker;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Сторінки самої статистики не враховуємо
        if ($request->is('stats*')) {
            return $response;
        }

        // Додаткові параметри зберігаємо в одному JSON-полі extra
        $extra = [];

        // Параметри фільтра (brand, region тощо)
        $filters = $request->only(['brand', 'region', 'page']);
        if (!empty($filters)) {
            $extra['filters'] = $filters;
        }

        // Ідентифікатор переглянутого об'єкта (авто або країна)
        $route = $request->route();
        if ($route) {
            foreach (['car', 'country'] as $param) {
                $model = $route->parameter($param);
                if ($model) {
                    $extra['object'] = $param;
                    $extra['object_id'] = is_object($model) ? $model->getKey() : $model;
                    $extra['object_label'] = is_object($model)
                        ? ($model->name ?? trim(($model->brand ?? '') . ' ' . ($model->model ?? '')))
                        : null;
                }
            }
        }

        Tracker::create([
            'page'       => '/' . ltrim($request->path(), '/'),
            'ip'         => $request->ip(),
            'status'     => $response->getStatusCode(),
            'method'     => $request->method(),
            'route_name' => $route?->getName(),
            'user_agent' => mb_substr((string) $request->userAgent(), 0, 255),
            'extra'      => $extra ?: null,
            'visited_at' => now(),
        ]);

        return $response;
    }
}
